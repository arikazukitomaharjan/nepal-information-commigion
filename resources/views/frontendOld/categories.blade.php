<div class="art-categories">

    <h2>Categories</h2>

    <ul class="sub-category">
        <li ng-repeat="category in categories">
            <i class="fa fa-cog"></i><a href ng-click=" onLinkClicked(category.name)"><% category.name %> </a>
        </li>
    </ul>

</div> <!-- end .post-categories -->