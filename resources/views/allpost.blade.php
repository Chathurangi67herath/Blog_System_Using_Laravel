@include('componets.navbar')

<div class="web-content-post">
    <div class="post-background">

        @foreach ($post as $posts)
            <div class="post">
                <h3 class="title">{{ $posts->title }}</h3>
                <p class="date">{{ $posts->created_at }}
                <p>
                    <br>
                <p class="description">{{ $posts->description }}
                </p>
                <br>
                <div class="action">
                    <div class="pbutton">
                        <a href="/deletepost/{{ $posts->id }}"> Delete </a>
                    </div>

                    <div class="pbutton">
                        <a href="/updatepost/{{ $posts->id }}"> Update </a>
                    </div>
                </div>

            </div>
        @endforeach
    </div>


</div>
