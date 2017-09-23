@section('map')
     <script type="text/javascript">var centreGot = false;</script>{!!$map['js']!!}
@endsection
<div style="width: 500px; height: 500px;">
{!!$map['html']!!}
</div>