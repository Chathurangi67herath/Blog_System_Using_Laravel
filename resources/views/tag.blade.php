@include('componets.navbar')

<div class="web-content">
    <!--Left Content==========================================================-->
    <div class="left">
        <div class="left-content">
            <h1>New Tag</h1>
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">{{ $error }}</div>
            @endforeach
            <form method="POST" action="/savetag">
                {{ csrf_field() }}
                <label>Title</label><br />
                <input type="text" name="title" />
                <br />
                <label>Description</label><br />
                <input type="text" name="description" />
                <br />
                <input id="submit" type="submit" value="Create" />
                <input id="reset" type="reset" value="Clear" />
            </form>
        </div>
    </div>

    <!--Right Content==========================================================-->
    <div class="right">
        <div class="right-content">
            <form method="GET" action="/searchtag">
                {{ csrf_field() }}
                <div class="search">
                    <input id="sinput" type="search" name="search" placeholder="Search by tag title" />
                    <input id="sbtn" type="submit" value="Search" />
                </div>
            </form>

            <table border="1px solid black">
                <h1>
                    Tag List
                </h1>
                <thead>
                    <tr>
                        <th>Tag Title</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($tag as $tags)
                        <tr>
                            <td>{{ $tags->title }}</td>
                            <td>{{ $tags->description }}</td>

                            <td>
                                <a href="/deletetag/{{ $tags->id }}">
                                    <button>Delete</button></a>

                                <a href="/updatetag/{{ $tags->id }}">
                                    <button>Update</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
