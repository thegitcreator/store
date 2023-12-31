@extends('master')

@section('title', 'Корзина')

@section('content')
    <div class="starter-template">
        <p class="alert alert-success">Добавлен товар iPhone X 64GB</p>
        <h1>Корзина</h1>
        <p>Оформление заказа</p>
        <div class="panel">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Название</th>
                    <th>Кол-во</th>
                    <th>Цена</th>
                    <th>Стоимость</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <a href="№">
                            <img height="56px" src="№">
                            iPhone X 64GB
                        </a>
                    </td>
                    <td><span class="badge">1</span>
                        <div class="btn-group form-inline">
                            <form action="№" method="POST">
                                <button type="submit" class="btn btn-danger" href=""><span
                                        class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                                <input type="hidden" name="_token" value="ABPmrmjZu9IMjdm3Bn57BbJEhsBVzISJBv9dIzZp">                            </form>
                            <form action="№" method="POST">
                                <button type="submit" class="btn btn-success"
                                        href=""><span
                                        class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                <input type="hidden" name="_token" value="ABPmrmjZu9IMjdm3Bn57BbJEhsBVzISJBv9dIzZp">                            </form>
                        </div>
                    </td>
                    <td>71990 ₽</td>
                    <td>71990 ₽</td>
                </tr>
                <tr>
                    <td colspan="3">Общая стоимость:</td>
                    <td>71990 ₽</td>
                </tr>
                </tbody>
            </table>
            <br>
            <div class="btn-group pull-right" role="group">
                <a type="button" class="btn btn-success" href="#">Оформить заказ</a>
            </div>
        </div>
    </div>
@endsection
