
<table class="w3-table w3-" >
    <tr>
        <td style="width: 25%;"  >
            <div style="padding-top: 18px" >
                <img src="{{ url('/logo.png') }}" width="100px" >
            </div>
        </td>

        <td style="width: 50%" class="w3-display-container text-center w3-center" >
            <svg id="barcode{{ $resource->id }}" class="w3-block"></svg>
        </td>

        <td style="width: 25%;padding: 20px" class="w3-display-container">
            <div id="qrcode{{ $resource->id }}" class="w3-block"></div>
        </td>
    </tr>
</table>
<table class="w3-table w3-table-bordered" >
    <tr >
        <td style="width: 36%;padding: 0px;padding-left: 16px"  >
            <div class="w3-indigo w3-padding w3-center"   >
                Sender
            </div>
            <div class="w3-border w3-border-block w3-padding w3-display-container w3-light-gray"  >
                <span class="w3-left" >Account No</span>
                <span class="w3-right" >رقم الحساب</span>
                <br>
            </div>
            <div class="w3-border w3-border-block w3-padding w3-display-container"  >
                {{ optional($resource->company)->id }}
            </div>
            <div class="w3-border w3-border-block w3-padding w3-display-container w3-light-gray"  >
                <span style="float: left" >Customer Name</span>
                <span style="float: right" >اسم العميل</span>
                <br>
            </div>
            <div class="w3-border w3-border-block w3-padding w3-display-container"  >
                {{ optional($resource->company)->name }}
            </div>
            <div class="w3-border w3-border-block w3-padding w3-display-container w3-light-gray"  >
                <span style="float: left" >Address</span>
                <span style="float: right" >العنوان</span>
                <br>
            </div>
            <div class="w3-border w3-border-block w3-padding w3-display-container" style="height: 70px!important"  >
                {{ optional($resource->company)->address }}
            </div>
            <div class="w3-border w3-border-block w3-padding w3-display-container w3-light-gray"  >
                <span style="float: left" >Tel&Fax</span>
                <span style="float: right" >التليفون/الفاكس.</span>
                <br>
            </div>
            <div class="w3-border w3-border-block w3-padding w3-display-container"  >
                {{ optional($resource->company)->phone }}
            </div>
            <div class="w3-display-container w3-row"  >

                <div class="w3-col l6 m6 s6 w3-border w3-border-gray w3-display-container" >
                    <div class="w3-border w3-border-block w3- w3-display-container"  >
                        <span style="float: left" >Origin</span>
                        <span style="float: right" >جهة المصدر</span>
                        <br>
                    </div>
                    <div class="w3-border w3-border-block w3-padding w3-display-container"  >
                        {{ optional(optional($resource->company)->city)->name }}
                    </div>
                </div>

                <div class="w3-col l6 m6 s6 w3-border w3-border-gray w3-display-container" >
                    <div class="w3-border w3-border-block w3- w3-display-container"  >
                        <span style="float: left" >Province.</span>
                        <span class="w3-right" >الحى/المقاطعه</span>
                        <br>
                    </div>
                    <div class="w3-border w3-border-block w3-padding w3-display-container"  >
                        {{ optional(optional($resource->company)->area)->name }}
                    </div>
                </div>
            </div>
            <div class="w3-border w3-border-block w3-display-container w3-indigo w3-padding" style="padding: 3px;" >
                <span style="float: left" >Signature Of Sender</span>
                <span style="float: right" >توقيع الراسل</span>
                <br>
            </div>
            <div class="w3-border w3-border-gray w3-display-container w3-row w3-padding"  >
                <div class="w3-display-container" style="padding-bottom: 10px" >
                    <span style="float: left" >Name</span>
                    <span style="float: right" >الاسم</span>
                    <br>
                </div>
                <div class="w3-display-container" style="padding-bottom: 10px" >
                    <span style="float: left" >Sign</span>
                    <span style="float: right" >التوقيع</span>
                    <br>
                </div>
                <div class="w3-display-container" style="padding-bottom: 10px" >
                    <span style="float: left" >Pickup Date/Time</span>
                    <span style="float: right" >التاريخ/الوقت</span>
                    <br>
                </div>
                <div class="w3-display-container" style="padding-bottom: 10px" >
                    <span style="float: left" >Courier Signature's</span>
                    <span style="float: right" >توقيع المندوب</span>
                    <br>
                </div>
            </div>
            <div class="w3-border w3-border-gray w3-display-container w3-row" style="border-top: 0px"  >
                <div class="w3-col l6 m6 s6 w3-border w3-border-gray w3-display-container" >
                    <div class="w3-border w3-border-block w3-padding w3-display-container"  >
                        <span style="float: left" >Pieces</span>
                        <span style="float: right" >عدد القطع</span>
                        <br>
                    </div>
                    <div class="w3-border w3-border-block w3-padding w3-display-container w3-center"  >
                        {{ $resource->pieces }}
                    </div>
                </div>
                <div class="w3-col l6 m6 s6 w3-border w3-border-gray w3-display-container" >
                    <div class="w3-border w3-border-block w3-padding w3-display-container"  >
                        <span style="float: left" >Weight</span>
                        <span class="w3-right" >الوزن</span>
                        <br>
                    </div>
                    <div class="w3-border w3-border-block w3-padding w3-display-container w3-center"  >
                        {{ $resource->weight }}
                    </div>
                </div>
            </div>

        </td>

        <td style="width: 36px;padding: 0px" >
            <div class="w3-indigo w3-padding w3-center" >
                Receiver
            </div>
            <div class="w3-border w3-border-block w3-padding w3-display-container w3-light-gray"  >
                <span class="w3-left" >Contact Name</span>
                <span class="w3-right" >الشخص المرسل اليه</span>
                <br>
            </div>
            <div class="w3-border w3-border-block w3-padding w3-display-container"  >
                {{ optional($resource->receiver)->name }}
            </div>
            <div class="w3-border w3-border-block w3-padding w3-display-container w3-light-gray"  >
                <span style="float: left" >To Company</span>
                <span style="float: right" >الشركة المرسل اليها</span>
                <br>
            </div>
            <div class="w3-border w3-border-block w3-padding w3-display-container"  >
                {{ optional($resource->receiver)->company_name }} - {{ optional($resource->receiver)->branch_name }}
            </div>
            <div class="w3-border w3-border-block w3-padding w3-display-container w3-light-gray"  >
                <span style="float: left" >Address.</span>
                <span style="float: right" >العنوان</span>
                <br>
            </div>
            <div class="w3-border w3-border-block w3-padding w3-display-container" style="height: 70px!important"  >
                {{ optional($resource->receiver)->address }}
            </div>
            <div class="w3-border w3-border-block w3-padding w3-display-container w3-light-gray"  >
                <span style="float: left" >Tel&Fax.</span>
                <span style="float: right" >التليفون/الفاكس</span>
                <br>
            </div>
            <div class="w3-border w3-border-block w3-padding w3-display-container"  >
                {{ optional($resource->receiver)->phone }}
            </div>
            <div class="w3-border w3-border-block w3-display-container w3-row"  >
                <div class="w3-col l6 m6 s6 w3- w3-border-gray w3-display-container" >
                    <div class="w3-border w3-border-block w3- w3-display-container"  >
                        <span style="float: left;font-size: 10px" >Destination.</span>
                        <span style="float: right" >جهة المصدر</span>
                        <br>
                    </div>
                    <div class="w3-border w3-border-block w3-padding w3-display-container"  >
                        {{ optional(optional($resource->receiver)->city)->name }}
                    </div>
                </div>
                <div class="w3-col l6 m6 s6 w3- w3-border-gray w3-display-container" >
                    <div class="w3-border w3-border-block w3- w3-display-container"  >
                        <span style="float: left" >Province</span>
                        <span class="w3-right" >الحى/المقاطعه</span>
                        <br>
                    </div>
                    <div class="w3-border w3-border-block w3-padding w3-display-container"  >
                        {{ optional(optional($resource->receiver)->area)->name }}
                    </div>
                </div>
            </div>
            <div class="w3-border w3-border-block w3-display-container w3-indigo w3-padding" style="padding: 3px;" >
                <span style="float: left" >Receiver Data.</span>
                <span style="float: right" >بيانات المستلم</span>
                <br>
            </div>
            <div class="w3-border w3-border-gray w3-display-container w3-row w3-padding"  >
                <div class="w3-display-container" style="padding-bottom: 10px" >
                    <span style="float: left" >Name.</span>
                    <span style="float: right" >الاسم</span>
                    <br>
                </div>
                <div class="w3-display-container" style="padding-bottom: 10px" >
                    <span style="float: left" >Sign.</span>
                    <span style="float: right" >التوقيع</span>
                    <br>
                </div>
                <div class="w3-display-container" style="padding-bottom: 10px" >
                    <span style="float: left" >Receiver Date</span>
                    <span style="float: right" >التاريخ</span>
                    <br>
                </div>
                <div class="w3-display-container" style="padding-bottom: 10px" >
                    <span style="float: left" >Receiver Time.</span>
                    <span style="float: right" >الوقت</span>
                    <br>
                </div>
            </div>
            <div class="w3-border w3-border-block w3-padding w3-display-container"  >
                <span style="float: left" >Delivered Status.</span>
                <span style="float: right" >حالة التسليم</span>
                <br>
            </div>
            <div class=" w3-display-container w3-row"  >

                <div class="w3-col l4 m4 s4 w3-border w3-border-gray w3-display-container" >
                    <div class="w3-border w3-border-block w3- w3-display-container"  >
                        <div class="w3-display-topright" style="padding-right: 1px" >
                            <div class="w3-center" >تم التسليم</div>
                            <div class="w3-center" >Ok</div>
                        </div>
                        <br>
                        <br>

                        <div style="width: 29px;height: 37px" class="w3-light-gray w3-display-topleft" >
                        </div>
                    </div>
                </div>

                <div class="w3-col l4 m4 s4 w3-border w3-border-gray w3-display-container" >
                    <div class="w3-border w3-border-block w3- w3-display-container"  >
                        <div class="w3-display-topright" style="padding-right: 1px" >
                            <div class="w3-center" >اعادة التسليم</div>
                            <div class="w3-center" >Reply</div>
                        </div>
                        <br>
                        <br>

                        <div style="width: 29px;height: 37px" class="w3-light-gray w3-display-topleft" >
                        </div>
                    </div>
                </div>

                <div class="w3-col l4 m4 s4 w3-border w3-border-gray w3-display-container" >
                    <div class="w3-border w3-border-block w3- w3-display-container"  >
                        <div class="w3-display-topright" style="padding-right: 1px" >
                            <div class="w3-center" >مرتجع</div>
                            <div class="w3-center" >Return</div>
                        </div>
                        <br>
                        <br>

                        <div style="width: 29px;height: 37px" class="w3-light-gray w3-display-topleft" >
                        </div>
                    </div>
                </div>

            </div>

        </td>
        <td style="width: 24%;padding-top: 0px"  >

            <div class="w3-indigo w3-center w3-border w3-border-gray w3- " style="padding: 3px" >
                <span style="float: left" >Payment Type.</span>
                <span style="float: right" >طريقة الدفع</span>
                <br>
            </div>
            <div class="w3- w3-border w3-border-gray w3-center" style="padding: 3px;margin-bottom:5px" >
                {{ optional($resource->paymentType)->name }}
            </div>

            <div class="w3-indigo w3-center w3-border w3-border-gray w3- " style="padding: 3px" >
                <span style="float: left" >Service Type.</span>
                <span style="float: right" >نوع الخدمة</span>
                <br>
            </div>
            <div class="w3- w3-border w3-border-gray w3-center" style="padding: 3px;margin-bottom:5px" >
                {{ optional($resource->service)->name }}
            </div>

            <div class="w3-indigo w3-center w3-border w3-border-gray w3- " style="padding: 3px" >
                <span style="float: left" >Collection.</span>
                <span style="float: right" >المطلوب تحصيله</span>
                <br>
            </div>
            <div class="w3- w3-border w3-border-gray w3-center" style="padding: 3px;margin-bottom:5px;" >
                @if($resource->collection)
                    {{ optional($resource)->collection }}
                @else
                    <br>
                @endif
            </div>

            <div class="w3-indigo w3-center w3-border w3-border-gray" style="padding: 3px"  >
                <span style="float: left;font-size: 10px" >Cash Collected.</span>
                <span style="float: right;font-size: 10px" >المبلغ الذى تم تحصيله</span>
                <br>
            </div>
            <div class="w3- w3-border w3-border-gray w3-center" style="padding: 3px;margin-bottom:5px" >
                <br>
            </div>

            <div class="w3-indigo w3- w3-center w3-border w3-border-gray" style="padding: 3px" >
                <span style="float: left" >Returned.</span>
                <span style="float: right;font-size:10px" >رقم بوليصة الشحن العكسية</span>
                <br>
            </div>
            <div class="w3- w3-border w3-border-gray w3-center" style="padding: 3px;margin-bottom:5px" >
                @if($resource->returned)
                    {{ optional($resource)->returned }}
                @else
                    <br>
                @endif
            </div>


            <div class="w3-indigo w3-center w3-border w3-border-gray " style="padding: 3px" >
                <span style="float: left" >Remarks.</span>
                <span style="float: right" >ملاحظات</span>
                <br>
            </div>
            <div class="w3- w3-border w3-border-gray" style="padding: 3px;height: 341px" >
                {{ optional($resource)->notes }}
            </div>

        </td>

        <td  class="w3-padding w3-display-container" style="width: 4%" >
        </td>
    </tr>
</table>

<div class="w3-padding w3-row" style="padding-top: 0px;padding-bottom: 0px;font-size: 5px" >
    <div class="w3-center w3-border w3-border-gray" style="font-size: 5px;display:none" >
        Conditions of Carriage (Domestic Shipments) In tendering the shipment for carriage, the customer agrees to these terms and conditions of carriage and that this Air Waybill is NON-NEGOTIABLE and has been prepared by the customer or on the customer’s behalf by UFS. As used in these conditions, UFS includes UFS CO, all operating divisions and subsidiaries of UFS Co. and their respective agents, servants, officers and employees. 1. SCOPE OF CONDITIONS These conditions shall govern and apply to all services provided by UFS. BY SIGNING THIS AIR WAYBILL, THE CUSTOMER ACKNOWLEDGES THAT HE/SHE HAS READ THESE CONDITIONS AND AGREES TO BE BOUND BY EACH OF THEM. UFS shall not be bound by any agreement which varies from these conditions, unless such agreement is in writing and signed by an authorized officer of UFS. In the absence of such written agreement, these conditions shall constitute the entire agreement between UFS and each of its customers. No employee of UFS shall have the authority to alter or waive these terms and conditions, except as stated herein. 2. UFS’S OBLIGATIONS UFS agrees, subject to receiving payment of applicable rates and charges in effect on the date of acceptance by UFS of a customer’s shipment, to arrange for the transportation of the shipment between the locations agreed upon by UFS and the customer. UFS reserves the right to transport the customer’s shipment by any route and procedure and by successive carriers and according to its own handling, storage and transportation methods. 3. SERVICE RESTRICTIONS a. UFS reserves the right to refuse any documents or parcels from any person, firm, or company at its own discretion. b. UFS reserves the right to abandon carriage of any shipment at any time after acceptance when such shipment could possibly cause damage or delay to other shipments, equipment or personnel, or when any such carriage is prohibited by law or is in violation of any of the rules contained herein. c. UFS reserves the right to open and inspect any shipment consigned by a customer to ensure that it is capable of carriage to the destination within the standard customs procedures and handling methods of UFS.In exercising this right, UFS does not warrant that any particular item to be carried is capable of carriage, without infringing the law of any country or state through which the item may be carried. 4. LIMITATION OF LIABILITY Subject to Sections 5 and 6 hereof: a. UFS will be responsible for the customer’s shipment only while it is within UFS’s custody and control.UFS shall not be liable for loss or damage of a shipment while shipment is out of UFS’s custody or control.UFS’s LIABILITY IS IN ANY EVENT LIMITED TO TWENTY FIVE DOLLARS (US$25/=) or its equivalent per shipment unless a higher value is declared on the Airway bill at the time of tender and an additional charge is paid for, as assessed and determined by UFS, for each Twenty Five Dollars (US$25/=) or fraction thereof, by which the insured value designated by the customer on the Airway bill exceeds Twenty Five Dollars (US$25/=) per shipment. b. Notwithstanding the foregoing, should the customer, at the time of tender, declare a higher value than Twenty Five Dollars (US$25.00) on the Airway bill, UFS’s liability shall in any event be limited to the lower of the insured value or the amount of any loss or damage actually sustained by the customer. c. The actual value of a shipment shall be ascertained by reference to its replacement, reconstitution or reconstruction value at the time and place of shipment, whichever is less, without reference to its commercial utility to the customer or to other items of consequential loss. d. NOTWITHSTANDING ANY OF THE FOREGOING, THE MAXIMUM INSURED VALUE ON ANY SHIPMENT ACCEPTED BY UFS IS TEN THOUSAND DOLLARS (US$10,000.00) AND IN NO EVENT SHALL THE LIABILITY OF UFS EXCEED THAT AMOUNT. 5. CONSEQUENTIAL DAMAGES EXCLUDED UFS SHALL NOT BE LIABLE, IN ANY EVENT, FOR ANY CONSEQUENTIAL OR SPECIAL OR INCIDENTAL DAMAGE OR OTHER INDIRECT LOSS HOWEVER ARISING, WHETHER OR NOT UFS HAD KNOWLEDGE THAT SUCH DAMAGE MIGHT BE INCURRED, INCLUDING, BUT NOT LIMITED TO LOSS OF INCOME, PROFITS, INTEREST, UTILITY OR LOSS OF MARKET. 6. LIABILITIES NOT ASSUMED: a. UFS shall be not liable for any loss, damage, delay, misdelivery, nondelivery not caused by its own negligence, or for any loss, damage, delay, misdelivery or non-delivery caused by: i. the act, default or omission of the shipper or consignee or any other party who claims an interest in the shipment. ii. the nature of the shipment or any defect, characteristic, or inherent vice thereof. iii. violation by the shipper or consignee of any term or condition stated herein including, but not limited to, improper or insufficient packing, securing, marking or addressing, misdescribing the contents of any shipment or failure to observe any of these rules relating to shipments not acceptable for transportation whether such rules are now or hereafter promulgated by UFS. iv. Acts of God, perils of the air, enemies, public authorities acting with actual or apparent authority or law, acts or omission of postal, customs or other government officials, riots, strikes, or other local disputes, hazard incidents to a state of war, weather conditions, temperature or atmospheric changes or conditions, mechanical or other delay, of any aircraft used in providing transportation services or any other cause reasonably beyond the control of UFS. v. Acts or omissions of any postal service, forwarder, or any other entity to whom a shipment is tendered by UFS for transportation, regardless of whether the shipper requested or had knowledge of such third party delivery requirement. vi. Electrical or magnetic injury, erasure, or other such damage to electronic or photographic images or recordings in any form, or damage due to insects or vermin. b. While UFS will endeavour to exercise its best efforts to provide expeditious delivery in accordance with regular delivery schedules, UFS will not under any circumstances be liable for delay in pickup, transportation or delivery of any shipment regardless of the causes of such delay. 7. MATERIALS NOT ACCEPTABLE FOR TRANSPORT: a. UFS will notify customer from time to time as to certain classes of materials which are not accepted by UFS for carriage.It is the customer’s responsibility to accurately describe the shipment on this Airbill and to ensure that no material is delivered to UFS which has been declared to be unacceptable by UFS. b. UFS will not carry: iii. property, the carriage of which is prohibited by any law, regulation or state or local government of any country from, to or through which the property may be carried; and firearms bullion works of art negotiable instruments in bearer form jewelry precious metals precious stones lewd, obscene or pornographic material currency stamps deeds hazardous or combustible materials cashier’s checks money orders traveller’s checks industrial carbons and diamonds antiques plants animals iv. In the event that any customer should consign to UFS any such item as described above, or any item which the customer has undervalued for customs purposes or misdescribed, whether intentionally or otherwise, the customer shall indemnify and hold UFS harmless from all claims, damages, fines and expenses arising in connection therewith, and UFS shall have the right to abandon such property and/or release possession of said property to any agent or employee of any national or local government claiming jurisdiction over such materials.Immediately upon UFS’s obtaining knowledge that such materials infringing these conditions have been turned over to UFS for transport, UFS shall be free to exercise any of its rights reserved to it under this section without incurring liability whatsoever to the customer. PACKAGING AND ADDRESSING: The packaging of the customer’s documents or goods for transportation is the customer’s sole responsibility, including the placing of the goods or documents in any container which may be supplied to the customer by UFS. UFS accepts no responsibility for loss or damage to documents or goods caused by inadequate or inappropriate packaging. It is the sole responsibility of the customer to address adequately each consignment of documents or goods to enable effective delivery to be made. UFS shall not be liable for delay in forwarding or delivery resulting from the customer’s failure to comply with its obligations in this respect. NEGLIGENCE: The customer is liable for all losses, damages and expenses arising as a result of its failure to comply with its obligations under this agreement as a result of its negligence. CHARGES: Any rates quoted by UFS for carriage are inclusive of local airport taxes, but exclusive of any value added or sales taxes, duties, levies, imposts, deposits or outlays incurred in respect of carriage of the customer’s goods. Should the customer indicate by endorsement in the space provided on the airbill that the receiver shall be liable for any customs duty, the customer shall be liable for such customs duty in the event of a default in payment by the receiver. UFS will not be liable for any penalties imposed or loss or damage incurred due to the customer’s documents or goods being impounded by customs or similar authorities and the customer hereby indemnifies UFS against such penalty or loss. PROPERTY: UFS will only carry documents or goods which are the property of the customer and the customer warrants that it is authorized to accept and is accepting these conditions not only on behalf of itself but as agent and on behalf of all other persons who are or may hereafter be interested in the documents or goods. The customer hereby undertakes to indemnify UFS against any damages, costs and expenses resulting from any breach of this warranty. CLAIMS: ANY CLAIMS AGAINST UFS MUST BE SUBMITTED IN WRITING TO THE OFFICE OF UFS NEAREST THE LOCATION WHERE THE SHIPMENT WAS ACCEPTED, WITHIN SIXTY (60) DAYS OF THE DATE OF ACCEPTANCE BY UFS. Notwithstanding any of the foregoing, no claim for loss or damage will be entertained until all transportation charges have been paid. NON-DELIVERY OF SHIPMENT Notwithstanding the shipper’s instruction to the contrary, the shipper shall be liable for all costs and expenses related to the shipment of the package, and for costs incurred in either returning the shipment or warehousing the shipment pending disposition.
    </div>
    <div class="w3-col l6 m6 s6 w3-" style="padding: 3px!important;font-size:6px;text-align: justify" >
        In tendering the shipment for carriage, the customer agrees to these terms and conditions of carriage and that this Air Waybill is NON-NEGOTIABLE and has been prepared by the customer or on the customer’s behalf by UFS.  As used in these conditions, UFS includes UFS CO, all operating divisions and subsidiaries of UFS Co. and their respective agents, servants, officers and employees.
        1.SCOPE OF CONDITIONS
        These conditions shall govern and apply to all services provided by UFS. by signing this air waybill, the customer acknowledges that he/she has read these conditions and agrees to be bound by each of them. UFS shall not be bound by any agreement which varies from these conditions, unless such agreement is in writing and signed by an authorized officer of UFS.  In the absence of such written agreement, these conditions shall constitute the entire agreement between UFS and each of its customers.  No employee of UFS shall have the authority to alter or waive these terms and conditions, except as stated herein.
        2.UFS’S OBLIGATIONS
        UFS agrees, subject to receiving payment of applicable rates and charges in effect on the date of acceptance by UFS of a customer’s shipment, to arrange for the transportation of the shipment between the locations agreed upon by UFS and the customer.UFS reserves the right to transport the customer’s shipment by any route and procedure and by successive carriers and according to its own handling, storage and transportation methods.
        3.SERVICE RESTRICTIONS
        A.UFS reserves the right to refuse any documents or parcels from any person, firm, or company at its own discretion.
        B.UFS reserves the right to abandon carriage of any shipment at any time after acceptance when such shipment could possibly cause damage or delay to other shipments, equipment or personnel, or when any such carriage is prohibited by law or is in violation of any of the rules contained herein.
        C.UFS reserves the right to open and inspect any shipment consigned by a customer to ensure that it is capable of carriage to the destination within the standard customs procedures and handling methods of UFS.In exercising this right, UFS does not warrant that any particular item to be carried is capable of carriage, without infringing the law of any country or state through which the item may be carried.
        B.Notwithstanding the foregoing, should the customer, at the time of tender, declare a higher value than Twenty Five Dollars (US$25.00) on the Airway bill, UFS’s liability shall in any event be limited to the lower of the insured value or the amount of any loss or damage actually sustained by the customer.
        C.The actual value of a shipment shall be ascertained by reference to its replacement, reconstitution or reconstruction value at the time and place of shipment, whichever is less, without reference to its commercial utility to the customer or to other items of consequential loss.
        D.notwithstanding any of the foregoing, the maximum insured value on any shipment accepted by ufs is ten thousand dollars (us$10,000.00) and in no event shall the liability of ufs exceed that amount.
        4.CONSEQUENTIAL DAMAGES EXCLUDED
        UFS shall not be liable, in any event, for any consequential or special or incidental damage or other indirect loss however arising, whether or not ufs had knowledge that such damage might be incurred, including, but not limited to loss of income, profits, interest, utility or loss of market.
    </div>
    <div class="w3-col l6 m6 s6" style="padding: 3px!important;font-size: 6px;text-align: justify" >
        5.LIABILITIES NOT ASSUMED:
        A. UFS shall be not liable for any loss, damage, delay, misdelivery, nondelivered not caused by its own negligence, or for any loss, damage, delay, misdelivery or non-delivery caused by:
        i. the act, default or omission of the shipper or consignee or any other party who claims an interest in the shipment.
        ii. the nature of the shipment or any defect, characteristic, or inherent vice thereof.
        iii. violation by the shipper or consignee of any term or condition stated herein including, but not limited to, improper or insufficient packing, securing, marking or addressing, misdescribing the contents of any shipment or failure to observe any of these rules relating to shipments not acceptable for transportation whether such rules are now or hereafter promulgated by UFS.
        iv. Acts of God, perils of the air, enemies, public authorities acting with actual or apparent authority or law, acts or omission of postal, customs or other government officials, riots, strikes, or other local disputes, hazard incidents to a state of war, weather conditions, temperature or atmospheric changes or conditions, mechanical or other delay, of any aircraft used in providing transportation services or any other cause reasonably beyond the control of UFS.
        v. Acts or omissions of any postal service, forwarder, or any other entity to whom a shipment is tendered by UFS for transportation, regardless of whether the shipper requested or had knowledge of such third party delivery requirement.
        vi. Electrical or magnetic injury, erasure, or other such damage to electronic or photographic images or recordings in any form, or damage due to insects or vermin.
        B. While UFS will endeavor to exercise its best efforts to provide expeditious delivery in accordance with regular delivery schedules, UFS will not under any circumstances be liable for delay in pickup, transportation or delivery of any shipment regardless of the causes of such delay.
        6.MATERIALS NOT ACCEPTABLE FOR TRANSPORT:
        A.UFS will notify customer from time to time as to certain classes of materials which are not accepted by UFS for carriage. It is the customer’s responsibility to accurately describe the shipment on this Air bill and to ensure that no material is delivered to UFS which has been declared to be unacceptable by UFS.
        B.UFS will not carry:
        iii. property, the carriage of which is prohibited by any law, regulation or state or local government of any country from, to or through which the property may be carried; and firearms bullion works of art negotiable instruments in bearer form jewelry precious metals precious stones lewd, obscene or pornographic material currency stamps deeds hazardous or combustible materials cashier’s checks money orders traveler’s checks industrial carbons and diamonds antiques plants animals
        iv. In the event that any customer should consign to UFS any such item as described above, or any item which the customer has undervalued for customs purposes or misdescribed, whether intentionally or otherwise, the customer shall indemnify and hold UFS harmless from all claims, damages, fines and expenses arising in connection therewith, and UFS shall have the right to abandon such property and/or release possession of said property to any agent or employee of any national or local government claiming jurisdiction over such
    </div>

</div>
<div class="w3-center" style="margin-top: -7px" >www.ufs-eg.com</div>

<div  style=";position: fixed;top: 40%;right: -183px;text-align: center;" >
    <div style="transform: rotate(90deg);" >
        الحد الاقصى للتعويض عن اى شحنه هو 100 جنية <br>
        The Maximum compensation of any shipment is a local 100 LE Only
    </div>
</div>

<script>

    JsBarcode("#barcode{{ $resource->id }}", "{{ $resource->code }}", {
        font: 'Arial',
        fontSize: 25,
    });

    new QRCode(document.getElementById("qrcode{{ $resource->id }}"), {
        text: "{{ $resource->code }}",
        width: 120,
        height: 120,
    });


</script>
