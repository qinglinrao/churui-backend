@extends('layouts/interface')

@include('layouts.sidebar.customer')

@section('main')
<div class="vip-rank-wrap">
  <h3 class="o-title">会员等级</h3>
  <div class="vip-rank-table">
    <table>
      <thead>
	<tr>
	  <th class="first"></th>
	  <th>注册会员</th>
	  <th>普通会员（V1）</th>
	  <th>高级会员（V2）</th>
	  <th>VIP会员（V3）</th>
	  <th>至尊VIP会员（V4）</th>
	</tr>
      </thead>
      <tbody>
	<tr>
	  <td class="first">升级模式</td>
	  <td>自动升级</td>
	  <td>自动升级</td>
	  <td><a href="#" class="enable">启用该等级</a></td>
	  <td><a href="#" class="enable">启用该等级</a></td>
	  <td><a href="#" class="enable">启用该等级</a></td>
	</tr>
	<tr>
	  <td class="first">满足条件</td>
	  <td>注册</td>
	  <td>
	    <p><b>交易额￥</b><input type="text" /></p>
	    <p><b>或交易次数</b><input type="text" /></p>
	  </td>
	  <td>
	    <p><b>交易额￥</b><input type="text" /></p>
	    <p><b>或交易次数</b><input type="text" /></p>
	  </td>
	  <td>
	    <p><b>交易额￥</b><input type="text" /></p>
	    <p><b>或交易次数</b><input type="text" /></p>
	  </td>
	  <td>
	    <p><b>交易额￥</b><input type="text" /></p>
	    <p><b>或交易次数</b><input type="text" /></p>
	  </td>
	</tr>
	<tr>
	  <td class="first">会员权益</td>
	  <td>-</td>
	  <td><p>折扣<input type="text" /></p></td>
	  <td><p>折扣<input type="text" /></p></td>
	  <td><p>折扣<input type="text" /></p></td>
	  <td><p>折扣<input type="text" /></p></td>
	</tr>

      </tbody>
    </table>
  </div>
  <div class="message">
    <p>商城客户当达到一定条件之后可以成为会员 ，交易次数/交易额不统计交易关闭订单</p>
  </div>
</div>
@stop
