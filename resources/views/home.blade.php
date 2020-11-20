<div class="container">
    <form class="form-inline" action="/search">
        @csrf
        <label for="keyword">Kata kunci : </label>
        <input type="text" class="form-control" name="keyword">
        <button type="submit" class="btn btn-primary">Search</button>
    </form>       
    <h2>Daftar Artikel</h2>
    @foreach($artikel as $a)
        <div class="panel panel-default" col=>
            <div class="panel-heading">
                <h3>{{ $a->title}}<h3>
            </div>
            <div class="panel-body">
                <img src="{{ $a->urlToImage}}">
                <p>{{ $a->description}}<p>
                <p>{{ $a->url}}<p>
            </div>
        </div>
    @endforeach
</div>
   