@extends('sideBar')

@section('title', 'Menú')



@section('seccion')
<style>
  .button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 50px 50px;
    text-align: center;
    font-size: 16px;
    cursor: pointer;
  }

  .button:hover {
    background-color: green;
  }

  html, body {
      width: 100%;
  }
  table {
      margin: 0 auto;
      margin-top: 13%;
  }
</style>

    <table style="width:75%">
    <tr>
      <th> <button class="button">Área 1</button> </th>
      <th> <button class="button">Área 2</button> </th>
      <th> <button class="button">Área 3</button> </th>
      <th> <button class="button">Área 4</button> </th>
    </tr>
    <tr>
      <th> <button class="button">Área 5</button> </td>
      <th> <button class="button">Área 6</button> </td>
      <th> <button class="button">Área 7</button> </td>
      <th> <button class="button">Área 8</button> </td>
    </tr>
    </table>
@endsection
