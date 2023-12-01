@include('componets.navbar')

<div class="web-content">
    <div class="left" id="different">
        <div class="left-content" id="different-content">
            <h1>Post Update</h1>
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach
            <form method="POST" action="/saveupdatepost">
                {{ csrf_field() }}
                <label>Title</label><br />
                <input type="text" name="title" value="{{ $postdata->title }}" />
                <br />
                <label>Description</label><br />
                <input type="text" name="description" value="{{ $postdata->description }}" />
                <br />
                <input type="hidden" name="id" value="{{ $postdata->id }}">
                <input id="submit" type="submit" value="Update" />
                <input id="reset" type="reset" value="Clear" />
            </form>
        </div>
    </div>
</div>
