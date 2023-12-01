@include('componets.navbar')

<div class="web-content">
    <!--Left Content==========================================================-->
    <div class="left">
        <div class="left-content">
            <h1>New Categoty</h1>
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">{{ $error }}</div>
            @endforeach
            <form method="POST" action="/savecategory">
                {{ csrf_field() }}
                <label>Type</label><br />
                <input type="text" name="type" />
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
            <form method="GET" action="/searchcategory">
                {{ csrf_field() }}
                <div class="search">
                    <input id="sinput" type="search" name="search" placeholder="Search by category type" />
                    <input id="sbtn" type="submit" value="Search" />
                </div>
            </form>

            <h1>
                Category List
            </h1>

            <div class="categoties">
                @foreach ($category as $categories)
                    <div class="item">

                        <h3> {{ $categories->type }}</h3>
                        <br>
                        <p> {{ $categories->description }}</p>
                        <br>
                        <a href="/deletecategory/{{ $categories->id }}">
                            <img src='{{ asset('img/delete.png') }}'></a>

                        <a href="/updatecategory/{{ $categories->id }}">
                            <img src='{{ asset('img/edit.png') }}'></a>

                        <a href="/viewpost/{{ $categories->id }}">
                            View Post</a>
                    </div>
                @endforeach
            </div>



        </div>
    </div>
</div>
