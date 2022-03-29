<div class="about-area pt-lg-10 pt-8">
    <div class="container">
        <div class="row align-items-center">
            <div class="text-center text-md-start col-md-6">
                <div class="section-title mb-4">

                    @if (Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                    @endif

                    <form  wire:submit.prevent="addCountry()">
                        @csrf
                        <label> Şehir Adı: </label>

                        <input type="text" name="name" wire:model="name" /> <br> <br>
                        <label> Şehir Sırası: </label>

                        <input type="text" name="sira" wire:model="sira" /> <br> <br>

                        <button class="btn app-btn-primary" type="submit">
                            Kaydet
                        </button>

                    </form>


                    <table>
                        
                        <tr>
                             
                            <td>sira </td>
                            <td>şehir adı </td>

                        </tr>
                        @foreach ($country as $item)
                        <tr>
                            
                                  
                             
                            <th> {{$item->sira}} </th>
                            <th> {{$item->name}} </th>

                        

                        </tr>
                        @endforeach  
                    </table>

                </div>
            </div>

        </div>

    </div>

</div>
