@include('componets.navbar')

<div class="web-content">
    <!--Left Content==========================================================-->
    <div class="left">
        <div class="left-content">
            <h1>New Post</h1>
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">{{ $error }}</div>
            @endforeach
            <form method="POST" action="/savepost">
                {{ csrf_field() }}
                <label>Title</label><br />
                <input type="text" name="title" />
                <br />
                <label>Description</label><br />
                <input type="text" name="description" />
                <br />
                {{-- <label>Category</label><br />
                <select class="selectoption" name="category_id">
                    <option>Select One</option>
                    @foreach ($category as $categories)
                        <option>{{ $categories->type }}</option>
                    @endforeach
                </select>
                <br />
                <label>Tags</label><br />
                <select class="selectoption" name="tag_id">
                    <option>Select</option>
                    @foreach ($tag as $tags)
                        <option>{{ $tags->title }}</option>
                    @endforeach
                </select>
                <br /> --}}
                {{-- <label>Image</label><br />
                <div class="imageinput">
                    <input type="file" name="image" />
                </div> --}}
                <input id="submit" type="submit" value="Create" />
                <input id="reset" type="reset" value="Clear" />
            </form>
        </div>
    </div>

    <!--Right Content==========================================================-->
    <div class="right">
        <div class="right-content">
            <form method="GET" action="/searchpost">
                {{ csrf_field() }}
                <div class="search">
                    <input id="sinput" type="search" name="search" placeholder="Search by post title" />
                    <input id="sbtn" type="submit" value="Search" />
                </div>
            </form>

            <table border="1px solid black">
                <h1>
                    Post List
                </h1>
                <thead>
                    <tr>
                        <th>Post ID</th>
                        <th>Post Title</th>
                        <th>Created Time</th>
                    </tr>
                </thead>


                <tbody>
                    @foreach ($post as $posts)
                        <tr>
                            <td>{{ $posts->id }}</td>
                            <td>{{ $posts->title }}</td>
                            <td>{{ $posts->created_at }}</td>


                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
