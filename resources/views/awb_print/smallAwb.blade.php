<div class="w3-padding w3-tiny awb-item"   >
    <table class="w3-table w3-border-0 w3-tiny ">
        <tr>
            <td style="width: 10%;">
                <div style="padding-top: 18px">
                    <img src="{{ url('/logo.png') }}" height="77px">
                </div>
            </td>

            <td style="width: 25%" class="w3-display-container text-center w3-center">
                <br>
                <br>
                <span class="w3-padding w3-large">
                    {{ date('Y-m-d') }}
                </span>
            </td>

            <td style="width: 40%" class="w3-display-container text-center w3-center">
                <svg id="barcode{{ $resource->id }}" class="w3-block"></svg>
            </td>

            <td style="width: 25%;padding: 20px" class="w3-display-container">
                <div id="qrcode{{ $resource->id }}" class="w3-block"></div>
            </td>
        </tr>
    </table>

    <div class="w3-padding">
        <table class="w3-table w3-bordered w3-border-black custom-table">
            <tr>
                <th class="w3-indigo w3-center" colspan="2">Shipper Name</th>
                <th class="w3-indigo w3-center" colspan="2">Contact Name</th>
            </tr>
            <tr>
                <td class="w3-display-container" colspan="2" >
                    {{ optional($resource->company)->name }}
                </td>

                <td class="w3-display-container" colspan="2">
                    {{ optional($resource->receiver)->name }}
                </td>
            </tr>
            <tr>
                <td class="w3-display-container">
                    <b class="w3-left">
                        Origin
                    </b>

                    <span class="w3-right">
                        {{ optional(optional($resource->branch)->city)->name }}
                    </span>
                </td>
                <td class="w3-display-container">
                    <b class="w3-left">
                        Province
                    </b>

                    <span class="w3-right">
                        {{ optional(optional($resource->branch)->area)->name }}
                    </span>
                </td>
                <td class="w3-display-container">
                    <b class="w3-left">
                        Destination
                    </b>

                    <span class="w3-right">
                        {{ optional(optional($resource->receiver)->city)->name }}
                    </span>
                </td>
                <td class="w3-display-container">
                    <b class="w3-left">
                        Province
                    </b>

                    <span class="w3-right">
                        {{ optional(optional($resource->receiver)->area)->name }}
                    </span>
                </td>
            </tr>
            <tr>
                <td class="w3-display-container" colspan="2" >
                    <b class="w3-left">
                        Contact Name
                    </b>

                    <span class="w3-right">
                        {{ optional($resource->branch)->name }}
                    </span>
                </td>

                <td class="w3-display-container" colspan="2">
                    <b class="w3-left">
                        Company
                    </b>

                    <span class="w3-right">
                        {{ optional($resource->receiver)->company_name }}
                    </span>
                </td>
            </tr>
            <tr>
                <td class="w3-display-container" colspan="2" >
                    <b class="w3-left">
                        Address
                    </b>

                    <span class="w3-right">
                        {{ optional($resource->branch)->address }}
                    </span>
                </td>

                <td class="w3-display-container" colspan="2">
                    <b class="w3-left">
                        Address
                    </b>

                    <span class="w3-right">
                        {{ optional($resource->receiver)->address }}
                    </span>
                </td>
            </tr>
            <tr>
                <td class="w3-display-container" colspan="2" >
                    <b class="w3-left">
                        Tel
                    </b>

                    <span class="w3-right">
                        {{ optional($resource->branch)->phone }}
                    </span>
                </td>

                <td class="w3-display-container" colspan="2">
                    <b class="w3-left">
                        Tel
                    </b>

                    <span class="w3-right">
                        {{ optional($resource->receiver)->phone }}
                    </span>
                </td>
            </tr>



        </table>
        <table class="w3-table custom-table" >
            <tr>
                <td class="w3-display-container"  style="width: 33.33%" >
                    <b class="w3-left">
                        Receiver Name
                    </b>

                    <span class="w3-right">

                    </span>
                </td>

                <td class="w3-display-container"  style="width: 33.33%" >
                    <b class="w3-left">
                        Title
                    </b>

                    <span class="w3-right">

                    </span>
                </td>

                <td class="w3-display-container"  style="width: 33.33%" >
                    <b class="w3-left">
                        Rec Data
                    </b>

                    <span class="w3-right">

                    </span>
                </td>
            </tr>
            <tr>
                <td class="w3-display-container"  style="width: 33.33%" >
                    <b class="w3-left">
                        Shipment Type
                    </b>

                    <span class="w3-right">
                        {{ optional($resource->awbCategory)->name }}
                    </span>
                </td>

                <td class="w3-display-container"  style="width: 33.33%" >
                    <b class="w3-left">
                        Service Type
                    </b>

                    <span class="w3-right">
                        {{ optional($resource->service)->name }}
                    </span>
                </td>

                <td class="w3-display-container"  style="width: 33.33%" >
                    <b class="w3-left">
                        Department
                    </b>

                    <span class="w3-right">
                        {{ optional($resource->department)->name }}
                    </span>
                </td>
            </tr>

            <tr>

                <td class="w3-display-container" colspan="3" >
                    <b class="w3-left">
                        Remark
                    </b>

                    <span class="w3-right">
                        {{ $resource->notes }}
                    </span>
                </td>
            </tr>
        </table>

        <div class="w3-block w3-padding" style="border-bottom: 2px dashed black" ></div>

    </div>



    <script>
        JsBarcode("#barcode{{ $resource->id }}", "{{ $resource->code }}", {
            font: 'Arial',
            height: 57,
            fontSize: 18,
        });

        new QRCode(document.getElementById("qrcode{{ $resource->id }}"), {
            text: "{{ $resource->code }}",
            width: 57,
            height: 57,
        });

    </script>

</div>
