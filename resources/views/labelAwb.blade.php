<div class="w3-display-container w3-center label-height" >
    <svg id="barcode{{ $resource->id }}" class="w3-block w3-text-indigo"></svg>
    <b>{{ optional($resource->receiver)->name }}</b>
    <p>
        {{ optional($resource->receiver)->address }}
    </p>
</div>

<script>
    JsBarcode("#barcode{{ $resource->id }}", "{{ $resource->code }}", {
        font: 'Arial',
        height: 50,
        lineColor: '#3f51b5',
        fontSize: 18,
    });
/*
    new QRCode(document.getElementById("qrcode{{ $resource->id }}"), {
        text: "{{ $resource->code }}",
        width: 57,
        height: 57,
    });*/

</script>
