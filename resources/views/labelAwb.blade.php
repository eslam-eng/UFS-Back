<div class="w3-display-container w3-center label-height" >
    <svg id="barcode{{ $resource->id }}" class="w3-block w3-text-indigo"></svg>
    <b style="margin-top: -15px" >{{ optional($resource->receiver)->name }}</b>
    <p>{{ optional($resource->receiver)->company_name }}</p>
    <p>{{ optional($resource->receiver)->title }}</p>
    <p style="margin-top: -15px" >
        {{ optional($resource->receiver)->address }} - {{ optional(optional($resource->receiver)->area)->name }}
    </p>
    <p style="margin-top: -15px">{{ optional($resource->receiver)->phone }}</p>
</div>

<script>
    JsBarcode("#barcode{{ $resource->id }}", "{{ $resource->code }}", {
        font: 'Arial',
        height: 30,
        lineColor: '#3f51b5',
        fontSize: 13,
    });
/*
    new QRCode(document.getElementById("qrcode{{ $resource->id }}"), {
        text: "{{ $resource->code }}",
        width: 57,
        height: 57,
    });*/

</script>
