<div class="d-flex justify-content-between">
    <p class="blog-post-category">{{$post->category->title}}</p>
    @auth()
    <form action="{{route('post.like.store', $post->id)}}" method="post">
        @csrf
        <span>{{$post->liked_users_count}}</span>
        <button type="submit" class="border-0 bg-transparent">
            <i class="fa{{ auth()->user()->likedPosts->contains($post->id) ? 's':'r' }} fa-heart"></i>
        </button>
    </form>
    @endauth
    @guest()
        <div>
            <span>{{$post->liked_users_count}}</span>
            <i class="far fa-heart"></i>
        </div>
    @endguest
</div>
