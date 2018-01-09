<center><br/><br/><img src="/logo.png" style="width: 100px"/><br/><br/>
Send {{ $bill->amount }} NTK to<br/>
{{ $bill->receive_address }}<br/><br/>
Received: <font id="received">{{ $received }}</font> NTK<br/>
Status: <font id="status">{{ (($bill->status == 1) ? 'Complete!' : 'Not complete') }}</font><br/><br/><font id="checking">
@if ($bill->status == 1)
You may now close this window.
@else
<img src="/ajax-loader.gif"/>
@endif
</font><br/><br/>
Powered by nTokey Pay.</center>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

// set script
var id = "{{ $bill->id }}";
var paid = 0;
var complete = {{ (($bill->status == 1) ? 1 : 0) }};

var check = false;
function checkPaid() {
	if (complete == 0) {
		$.get('/api/web/v1/check-paid/' + id, function(data) {
			if (data.complete == 1) {
				complete = 1;
				$("#status").html('Complete!');
				$("#checking").html('You may now close this window.');
				clearInterval(check);
			}

			if (paid != data.paid) {
				paid = data.paid;
				$("#received").html(paid);

			}
		});
	}

}
checkPaid();
check = setInterval(function() {
	checkPaid();
}, 5000);

</script>
