<section class="search cartoon-widget">
     <h3 class="header">Cartoon</h3>
    <div class="section-content">
    @foreach($cartoon as $news)
      <a href="{!! url('articles', $news->id)!!}"><img src="{!! url('public/uploads/article/'. $news->image) !!}"></a>
     @endforeach
    </div><!-- section-content -->
  </section><!-- saarch -->
  <!-- saarch -->