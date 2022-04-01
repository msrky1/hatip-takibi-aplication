
  @if (Session::has('message'))
  <div class="alert alert-success">
      <strong>{{ Session::get('message') }}</strong> <a style="color: red"
          href="/"> Anasayfa</a>
  </div>
@endif
<form class="call-to-action-form m-auto" wire:submit.prevent="addPartUser()">
    @csrf

    <div class="input-group">
        <input type="text" class="form-control" name="name" placeholder="Adınız Soyadınız" required wire:model="name">
        <input type="hidden" class="form-control" name="country_id" value='1'  wire:model="country_id">
        <input type="hidden" class="form-control" name="part_id"  wire:model="part_id"> 
        <input type="text" class="form-control" name="email" placeholder="E-Mail Adresiniz" required wire:model="email">

        <input type="number" class="form-control" name="number" placeholder="Numaranız (534491..01)" required
            wire:model="number">
    
         
    </div>

    <button type="submit" > Ekle </button>
</form>

