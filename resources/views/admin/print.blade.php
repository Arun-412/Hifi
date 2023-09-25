@include('layouts.webheader')
<!-- {{$data}} -->
<center>
    
    <table id="print_page" class="ui celled table table-border-bottom-0" style="width:50%;">
        <tr><h1>HIFI MONEY</h1></tr>
    <tr>
            <th>Account Holder Name</th>
            <td><h5>Arun</h5></td>
        </tr>
        <tr>
            <th>Bank Name</th>
            <td>Canara Bank</td>
        </tr>
        <tr>
            <th>Account Number</th>
            <td>3437101002021</td>
        </tr>
        <tr>
            <th>IFSC CODE</th>
            <td>CNRB0003437</td>
        </tr>
        <tr>
            <th>Transaction ID</th>
            <td>8818288189289</td>
        </tr>
        <tr>
            <th>Amount</th>
            <td><h5>5000</h5></td>
        </tr>
        <tr>
            <th>Transaction Status</th>
            <td><h5>SUCCESS</h5></td>
        </tr>
        <tr>
            <th>Date - Time</th>
            <td>2023/09/22 - 19:17:36</td>
        </tr>
        <tfoot>
            <th colspan="2"><center>Computer Generated Receipt No Need of Signature/Seal</center></th>
        </tfoot>           
                   
                  </table>
                  <a href="{{route('admin.money_transfer_report')}}">
                  <button
                          type="button"
                          class="btn btn-primary"
                          id="back"
                        >
                       
                         Back
                        </button> </a>
                  <button
                          type="button"
                          class="btn btn-primary"
                          id="print"
                        >
                         Print
                        </button>
</center>
<style>
@page { size: auto;  margin: 0mm; }
</style>
@include('layouts.webfooter')