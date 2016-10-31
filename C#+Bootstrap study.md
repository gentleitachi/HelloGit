# C#+Bootstrapで開発

### 実行環境
* Windows7
* Visual Studio 2015 Community

## そもそもどうやって開発していくの
Visual Studio のひな形である ASP.NET MVC5 をもとにアレコレやっていくようです。  
ちなみにMVC = Bootstrapという訳ではなく、もともとMVCという考え方があって  
そのフレームワークとしてMVC5からBootstrapが適用されたとの事。（←単純にVを担うと考えればいいんですかね）  

## MVCって何
Webアプリケーションを開発するにあたって複雑に絡み合うことになるコードを分割しようという発想  

Model      (基本プログラムの実行部分)  
View       (表示に関わる部分)  
Controller (V→C→Mのように、MとVの情報の受渡しを取り持つ **必要最低限**)  

### MVCにもたくさんあるらしい
基本部分は上記の通りだが、Cの有りようによって更に分類がある  
上記で欠けているM<->Vの部分を  

●Cが併せて受け持つ・・・ Push-MVC  
●VがMを参照 ・・・・・・ Pull-MVC  

## Visual Studioの操作
ここからは基本的なプロジェクトの立ち上げ方を調べて書きます  

### プロジェクトを作ろう
1. ファイル → 新規作成 → プロジェクト
2. 左ペインでWebを選択 → 表示されるテンプレート ASP.NET WEBアプリケーションを選ぶ → 名前を決める
3. テンプレートの選択はEmpty → コア参照はMVC → Azure クラウド内ホストのチェックを外す

### あとは内容によりけりだと思いますがポイントだけ

#### ■Controller
1. クラス作成  
・ソリューションエクスプローラのControllersフォルダで右クリック  
・追加→一番下のクラスでcsを作成  

2. コーディング  
・System.Web と System.Web.Mvc をusingディレクティブに指定  
・クラス名は末尾にControllerをつける  
・クラスはControllerを継承して作る  
・メソッドは public ActionResult ○○() の形  

3. アクションメソッドに関してもうちょっと  
・アクションメソッドの戻り値は ActionResult オブジェクト  
・派生クラスがありそれを返すことも可能(ContentResult, ViewResult)  
・http://hogehoge/(コントローラー名 - Controller)/アクションメソッド名 で実行  
・IndexがデフォルトなのでIndex()は省略可  
・後述のルーティングでどのアクションメソッドを実行するか変更可能？  

#### ■Routing
URLに対して呼び出すコントローラーやアクションを決定する  
RouteConfig.csで定義されている  
アプリケーション起動時にGlobal.asaxがApp_Start内を含めRouteConfig.csを読み込む  

* routes.MapRoute(string name, string url, object defaults) で設定
* urlパラメータでurlの引数を増やしたりできる

