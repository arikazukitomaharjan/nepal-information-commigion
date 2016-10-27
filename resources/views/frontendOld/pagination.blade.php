<div class="pagination-center" ng-show = "last_page != 0">

    <ul class="pagination">
        <li><a href ng-click="onPageClick(1)"><i class="fa fa-angle-left"></i></a></li>
        <li ng-repeat="n in [] | range:last_page"><a href ng-click="onPageClick(n)"><%n%></a></li>
        <li><a href ng-click="onPageClick(last_page)"><i class="fa fa-angle-right"></i></a></li>
    </ul>

</div>