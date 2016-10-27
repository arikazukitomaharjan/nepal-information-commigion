<style>
.search-result-table{
width:100%;
}
th{
height:60px;
width:180px;
color: Blue;
text-align:left;
}
</style>
<div class="col-sm-9" id="page-main-content">
  <table id="search-result-table" class="table-striped">
 <tr>
 <th style="width:50px;">SN</td>
 <th >सूचना अधिकारी</td>
 <th >निकाय</td>
 <th >पद</td>
 <th>सम्पर्क</th>
</tr>
 @foreach($officers as $singleResult)

 <tr style="height:50px;">
      <td> {!! $sn=$sn+1 !!}</td>
       <td> {!! $singleResult['name'] !!}</td>
       <td> {!! $singleResult['office_name'] !!}</td>
        <td>{!! $singleResult['post'] !!}</td>
        <td>{!! $singleResult['email']!!}  {!! $singleResult['phone']!!}  {!!$singleResult['phone1']!!}  {!!$singleResult['phone2']!!}</td>
  </tr>
@endforeach
<div class="pagination"> {!! $officers->render() !!}</div>
</div>
</table>
</div>

 
 
 