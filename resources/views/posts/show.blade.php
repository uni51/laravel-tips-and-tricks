<body>
    <div class="container">
        <div class="row">
            <h1>
               {{ $post->title }}
            </h1>

            <h2>
                {{ $post->author }}
            </h2>

            <h4>
                <b>status: </b>{{ $post->status }}
            </h4>

            <p>
                {{ $post->content }}
            </p>

            <p>
                <b>Published at : </b> {{ $post->date }}
            </p>
        </div>
    </div>
</body>
