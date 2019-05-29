Seção para criar funcionario

<form action="{{ url('/funcionarios')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<label for="Nome">{{'Nome'}}</label>
<input type="text" name="Nome" id="Nome" value="">
</br>

<label for="Nome da mãe">{{'Nome da mãe'}}</label>
<input type="text" name="Nome da mãe" id="Nome da mãe" value="">
</br>

<label for="Nome do pai">{{'Nome do pai'}}</label>
<input type="text" name="Nome do pai" id="Nome do pai" value="">
</br>

<label for="Email">{{'Email'}}</label>
<input type="email" name="Email" id="Email" value="">
</br>

<label for="Foto">{{'Foto'}}</label>
<input type="file" name="Foto" id="Foto" value="">
</br>

<input type="submit" value="CONFIRMAR">

</form>