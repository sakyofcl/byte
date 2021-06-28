



<div class="invoice bg-white w-100">
    <div class="invoice-content bg-white ml-0 mr-0 w-100 p-2" id="invoice">
    
      <div class="invoice-header">
          <div class="invoice-company-logo pl-1 pr-1">
            <img src={{asset("assets/images/logo/logo.png")}}  />
          </div>
      </div>
        
      <div class="invoice-info">
        @foreach($invoice['user'] as $items) 
          <div class="text-dark font-weight-light">ORDER: BO-{{$items->oid}}</div>
          <div style="color:gray;">{{$items->date}}</div>
          @endforeach
      </div>

      <div class="invoice-company">
          <div class="invoice-company-info text-left">
            <span class="mb-1">From:</span>
            <span>105/33 Unity Squre Sports Complex,</span>
            <span>Private Bus Stand,</span>
            <span>Kalmunai. PO:32300</span>
            <span>077 1377709</span>
            <span class="text-primary">info@byte.lk</span>
          </div>

          <div class="invoice-company-info text-right">
            <span >To:</span>
              @foreach($invoice['user'] as $items) 
                <span>{{$items->name}}</span>
              @endforeach
              @foreach($invoice['ship'] as $items)
                <span>{{$items->street}}</span>
                <span>{{$items->city}}. PO:{{$items->zip}}</span>
              @endforeach
              @foreach($invoice['user'] as $items) 
                <span>{{$items->phone}}</span>
              @endforeach
          </div>
      </div>
                
      <table class="table table-striped invoice-table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">product</th>
            <th scope="col">qty</th>
            <th scope="col">unit rate</th>
            <th scope="col">Amount</th>
          </tr>
        </thead>
        <tbody>
          <?php $i=1; ?>
          @foreach(Session::get('cart') as $items)
              <tr>
                  <td class="text-center">{{$i}}</td>
                  <td>{{$items['name'] }}</td>
                  <td class="text-right">{{$items['qty'] }}</td>
                  <td class="text-right">{{number_format($items['price']) }}</td>
                  <td class="text-right">Rs.{{number_format($items['price']*$items['qty'])}}</td>
              </tr>
              <?php $i++; ?>                                        
          @endforeach
          
        </tbody>
      </table>
    
      <div class="invoice-total">
          <h2>Total</h2>
          <?php $total=0?>
          @foreach(Session::get('cart') as $items)
            <?php $total=$total+$items['price']*$items['qty'];?>
          @endforeach
          <h2>Rs.{{number_format($total)}}</h2>
      </div>
        
      <footer>
          <P>
            <span>We sincerely appreciate your business,</span>
            <span>and looking forward to working with you again soon!</span>
          </P>
      </footer>
        
    </div>
</div>
 

