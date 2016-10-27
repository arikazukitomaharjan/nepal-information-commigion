 <table>
 <tr>
 <td>SN</td>
 <td>सुचना अधिकारीको नाम</td><br><br>
 <td>निकाय</td><br><br>
 <td>पद</td><br><br>
 <td>सम्पर्क</td><br><br>
 </tr>
 @foreach($officers as $singleResult)
 
 <tr>
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