<div class="w3-modal" id="askPrintModal" >
    <div class="w3-modal-content w3-card w3-round w3-white w3-padding">
        <div class="w3-center w3-padding">
            Are Sure To Print
            <br>
            <br>
            <div class="w3-center">
                <button class="w3-button w3-indigo" onclick="document.getElementById('askPrintModal').style.display='none';window.print()" >Print</button>
                <button class="w3-button w3-red" onclick="document.getElementById('askPrintModal').style.display='none'" >Cancel</button>
            </div>
        </div>
    </div>
</div>


<script>
    document.getElementById('askPrintModal').style.display='block';
</script>
