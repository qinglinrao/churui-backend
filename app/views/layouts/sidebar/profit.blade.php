@section('sidebar')
<div class="catalog-menu menu-item">
  {{--<a class="setup-button" href="{{ URL::route('merchants.add') }}" >创建代理商</a>--}}
  <ul>
    <li class="{{ Active::path('profit/1/list') }}">
      <a href="{{ URL::route('profit.merchants', ['type'=>'1']) }}">代理商</a>
    </li>
   {{-- <li class="{{ Active::path('profit/2/list') }}">
      <a href="{{ URL::route('profit.merchants', ['type'=>'2']) }}">门店</a>
    </li>
    <li class="{{ Active::path('profit/3/list') }}">
      <a href="{{ URL::route('profit.merchants', ['type'=>'3']) }}">BA</a>
    </li>--}}
  </ul>
  <ul>
     <li class="{{ Active::path('profit') }}">
      <a href="{{ URL::route('profit.index') }}">分润配置</a>
    </li>
  </ul>
</div>
@stop