<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'BiimCom')
<img src="https://biim-com.com/sites/bcom2018/files/mini-logo.png" class="logo" alt="Biim Com Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
