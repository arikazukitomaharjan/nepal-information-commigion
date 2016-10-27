<div class="other-artist-work"  ng-controller="RelatedArtWorkCtrl" ng-init = "init({{ $id }})">

    <div class="col-lg-2 col-md-3 col-xs-6 thumb" ng-repeat = "image in images">
        <a class="thumbnail" ng-href="<% basePath + 'photos/' + image.id %>">
            <img class="img-responsive" ng-src="<% getImagePath(image.image) %>" alt="<% image.title %>">
        </a>
    </div>


    <div class="col-lg-2 col-md-3 col-xs-6 thumb">
        <a class="thumbnail-show-more" href="{{ url('portfolio') }}">
            <i class="fa fa-angle-double-right fa-2x"></i>
        </a>
    </div>

</div>
<!-- .thumbnail .other-artist-work -->