@include('componets.navbar')

<div class="web-content">
    <div class="left" id="different">
        <div class="left-content" id="different-content">
            <h1>Category Update</h1>
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach
            <form method="POST" action="/saveupdatecategory">
                {{ csrf_field() }}
                <label>Type</label><br />
                <input type="text" name="type" value="{{ $categorydata->type }}" />
                <br />
                <label>Description</label><br />
                <input type="text" name="description" value="{{ $categorydata->description }}" />
                <br />
                <input type="hidden" name="id" value="{{ $categorydata->id }}">
                <input id="submit" type="submit" value="Update" />
                <input id="reset" type="reset" value="Clear" />
            </form>
        </div>
    </div>
</div>
