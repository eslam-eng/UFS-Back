<div class="w3-display-container w3-center label-height" >
    <svg id="barcode{{ $resource->id }}" class="w3-block w3-text-indigo"></svg>
    <p style="margin-top: -2px" ><b>{{ optional($resource->receiver)->name }}</b></p>
    <p class="margin-top" >{{ optional($resource->receiver)->company_name }}</p>
    <p class="margin-top" >{{ optional($resource->receiver)->title }}</p>
    <p class="margin-top" >
        {{ optional($resource->receiver)->address }} - {{ optional(optional($resource->receiver)->area)->name }}
    </p>
    <p class="margin-top">{{ optional($resource->receiver)->phone }}</p>
</div>

<script>
    JsBarcode("#barcode{{ $resource->id }}", "{{ $resource->code }}", {
        font: 'Arial',
        height: {{ isset($barcodeHeight)? $barcodeHeight : 30 }},
        lineColor: '#3f51b5',
        fontSize: {{ isset($barcodeFont)? $barcodeFont : 13 }},
    });
/*
    new QRCode(document.getElementById("qrcode{{ $resource->id }}"), {
        text: "{{ $resource->code }}",
        width: 57,
        height: 57,
    });*/

</script>
