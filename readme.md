<h2 align="center">trello風todoタスク管理アプリ</h2>

<img src="https://user-images.githubusercontent.com/69971751/112742545-7b50f100-8fca-11eb-9b69-93728229e70c.png" width=100%>

## :clap:参考にした学習教材及び製作者様
https://www.techpit.jp/courses/21
(※この教材は有料です。)
<br>講師:Mr.T様

## :octocat:開発環境
- Laravel Framework 5.5.50
- PHP 7.3.11
- MySQL 8.0.21
- heroku
- VSCode（Visual Studio Code）

<p align="center">
  <a href="https://www.php.net/"><img src="https://laravel.com/assets/img/components/logo-laravel.svg" width="300px;" /></a>
  <br>
  <a href="https://www.php.net/"><img src="https://www.php.net/images/logos/new-php-logo.png" width="80px;" /></a>
  &emsp;
  <a href="https://www.phpmyadmin.net/"><img src="https://upload.wikimedia.org/wikipedia/commons/9/95/PhpMyAdmin_logo.png" height="80px;" /></a>
  &emsp;
  <a href="https://www.nginx.com/"><img src="https://www.nginx.com/wp-content/uploads/2020/05/NGINX-product-icon.svg" height="80px;" /></a>
</p>

## :memo:アプリの機能

<h3>1.新規メモの作成</h3>

緑のプラスマークボタンを押すことでメモを新しく作ることが出来ます。

<img src="https://user-images.githubusercontent.com/69971751/112742545-7b50f100-8fca-11eb-9b69-93728229e70c.png" width=50%>

<h3>2.メモのタイトル・本文の作成と保存</h3>

I.メモタイトルと本文はそれぞれ"新規メモ"と"内容を入力する"の上でクリックすることで入力することが出来ます。<br>II.タイトルはデフォルトで"新規メモ"と入力されているので消去してから使ってください。<br>Ⅲ.書き終えたら右上の緑の更新ボタンを押して下さい。<br>Ⅳ.既に編集済みのメモへの変更も同様にして更新することが出来ます。<br>Ⅴ.最後に更新したメモが一番上に表示される様になっています。

<img src="https://user-images.githubusercontent.com/69971751/111622573-b4e86600-882c-11eb-8040-8fd27d5562fa.gif" width=50%>

<h3>3.選択しているメモの削除</h3>

メモリストの中から削除をしたいメモの上でクリックをするとメモが青くなり選択状態になります。その状態で右上の赤いボタンを押すと選択されたメモが削除されます。

<img src="https://user-images.githubusercontent.com/69971751/111623727-18bf5e80-882e-11eb-94e1-e4d27760ebd4.gif" width=50%>

## :pencil2:使用方法(Mac)

1.Dockerの導入
<br>
https://www.docker.com/get-started
からDockerをダウンロード。
<br>

2.dockerコマンドとdocker-composeコマンドの確認
<br>
```docker -v``` ```docker-compose -v```
<br>

3.開発環境とプロジェクトのクローン
<br>
```git clone https://github.com/hiroki-sawada0531/EvernoteLikeApp-PHP.ver.git```
<br>

4.開発環境を立ち上げ
<br>
```cd docker_simple_memo_php``` git cloneをしてきたディレクトリの直下まで移動。
<br>
```docker-compose -f .docker_memo/docker-compose.yml up -d``` ... doneが４つ表示されればOK。
<br>

4.サイトにアクセス
<br>
http://localhost:8080/login/ or http://localhost:8080/
にアクセスする。

