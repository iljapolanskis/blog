@props(['author'])

<img src="{{ $author->avatar_url }}" alt="Lary avatar">
<div class="ml-3">
    <h5 class="font-bold left-text"><a href="/posts?author={{ $author->username }}">{{ $author->name }}</a></h5>
    <h6><a href="/posts?author={{ $author->username }}">{{ '@' . $author->username }}</a></h6>
</div>
