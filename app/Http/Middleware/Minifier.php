<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Minifier
{
    private bool $inLocal      = true;
    private bool $inProduction = true;

    /**
     * Handle an incoming request.
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response   = $next($request);
        $content    = $response->getContent();

        $local      = config('app.env') == 'local' && $this->inLocal;
        $production = config('app.env') == 'production' && $this->inProduction;

        if ($content !== false && ($local || $production)) {
            $response->setContent(
                $this->minify($content)
            );
        }
        return $response;
    }

    private function minify(string $content): string
    {
        $rules = [
            ['/<!--.*?-->/', ''],
            ['/>\s+</', '><'],
            ['/\s+/', ' '],
        ];
        foreach ($rules as [$pattern, $replacement]) {
            $content = preg_replace(
                $pattern,
                $replacement,
                $content
            );
        }
        return trim($content);
    }
}
