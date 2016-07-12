@if (count($articles) === 0)
... html showing no articles found
@elseif (count($questions) >= 1)
@foreach($questions as $article)
dd($article);
@endforeach
@endif