<php?

	public function action_create($id = 0)
	{

		$data = [];

		//データの配列を準備しておく
		$data['item_cd'] = '';
		$data['item_name'] = '';
		$data['brand_name'] = '';
		$data['tc_category'] = '';
		$data['shop_category1'] = '';
		$data['shop_category_code1'] = '';
		$data['shop_category2'] ='';
		$data['shop_category_code2'] = '';
		$data['shop_category3'] = '';
		$data['shop_category_code3'] = '';
		$data['shop_category4'] = '';
		$data['shop_category_code4'] = '';
		$data['shop_category5'] = '';
		$data['shop_category_code5'] = '';
		$data['item_category'] = '';
		$data['item_category_code'] = '';
		$data['list_price'] = '';
		$data['is_open_price'] = '';
		$data['base_price'] = '';
		$data['latest_pur_price'] = '';
		$data['stock_type'] = '';
		$data['item_description_title'] = '';
		$data['system_item_cd'] = '';
		$data['create_member_name'] = '';
		$data['update_member_name'] = '';

		$data['message'] = '';


		//POSTの場合
//		if(Input::method() == 'POST'){

		if(false){
/*
			$val = Validation::forge();
			//ValidationクラスにFieldを登録
			$val->add('item_cd','商品コード')
			    ->add_rule('required')
			    ->add_rule('max_length',100);

			$val->add('item_name','商品名')
				->add_rule('required')
				->add_rule('max_length',300);

			$val->add('brand_name','ブランド名')
				->add_rule('required')
				->add_rule('max_length',100);

			$val->add('tc_category','TCカテゴリ')
				->add_rule('required')
				->add_rule('max_length',100);

			$val->add('shop_category1','店舗内カテゴリ1')
				->add_rule('required')
				->add_rule('max_length',300);

			$val->add('shop_category_code1','店舗内カテゴリコード1')
				->add_rule('required')
				->add_rule('max_length',50);

			$val->add('shop_category2','店舗内カテゴリ2')
				->add_rule('max_length',300);

			$val->add('shop_category_code2','店舗内カテゴリコード2')
				->add_rule('max_length',50);

			$val->add('shop_category3','店舗内カテゴリ3')
				->add_rule('max_length',300);

			$val->add('shop_category_code3','店舗内カテゴリコード3')
				->add_rule('max_length',50);

			$val->add('shop_category4','店舗内カテゴリ4')
				->add_rule('max_length',300);

			$val->add('shop_category_code4','店舗内カテゴリコード4')
				->add_rule('max_length',50);

			$val->add('shop_category5','店舗内カテゴリ5')
				->add_rule('max_length',300);

			$val->add('shop_category_code5','店舗内カテゴリコード5')
				->add_rule('max_length',50);

			$val->add('item_category','商品取得カテゴリ')
				->add_rule('max_length',300);

			$val->add('item_category_code','商品取得カテゴリコード')
				->add_rule('max_length',50);

			$val->add('list_price','定価')
				->add_rule('max_length',8)
				->add_rule('valid_string',array('numeric'));

			$val->add('is_open_price','オープン価格')
				->add_rule('required')
				->add_rule('max_length',1)
				->add_rule('valid_string',array('numeric'));

			$val->add('base_price','販売基準価格')
				->add_rule('max_length',8)
				->add_rule('valid_string',array('numeric'));

			$val->add('latest_pur_price','最終仕入れ金額')
				->add_rule('max_length',8)
				->add_rule('valid_string',array('numeric'));

			$val->add('stock_type','在庫タイプ')
				->add_rule('required')
				->add_rule('max_length',1)
				->add_rule('valid_string',array('numeric'));

			$val->add('item_description_title','商品説明タイトル')
				->add_rule('max_length',300);

			$val->add('system_item_cd','基幹システム商品コード')
				->add_rule('required')
				->add_rule('max_length',100);

			$val->add('create_member_name','作成者')
				->add_rule('required')
				->add_rule('max_length',50);

			$val->add('update_member_name','最終更新者')
				->add_rule('required')
				->add_rule('max_length',50);

			$out = '';
			if($val->run()){
				$out = '';
			}else{
				foreach($val->error() as $error){
					$out .= $error . '<br>';
				}
			}

			//postされた値を受け取る
			$data['item_cd'] = Input::post('item_cd');
			$data['item_name'] = Input::post('item_name');
			$data['brand_name'] = Input::post('brand_name');
			$data['tc_category'] = Input::post('tc_category');
			$data['shop_category1'] = Input::post('shop_category1');
			$data['shop_category_code1'] = Input::post('shop_category_code1');
			$data['shop_category2'] = Input::post('shop_category2');
			$data['shop_category_code2'] = Input::post('shop_category_code2');
			$data['shop_category3'] = Input::post('shop_category3');
			$data['shop_category_code3'] = Input::post('shop_category_code3');
			$data['shop_category4'] = Input::post('shop_category4');
			$data['shop_category_code4'] = Input::post('shop_category_code4');
			$data['shop_category5'] = Input::post('shop_category5');
			$data['shop_category_code5'] = Input::post('shop_category_code5');
			$data['item_category'] = Input::post('item_category');
			$data['item_category_code'] = Input::post('item_category_code');
			$data['list_price'] = Input::post('list_price');
			$data['is_open_price'] = Input::post('is_open_price',0);
			$data['base_price'] = Input::post('base_price');
			$data['latest_pur_price'] = Input::post('latest_pur_price');
			$data['stock_type'] = Input::post('stock_type');
			$data['item_description_title'] = Input::post('item_description_title');
			$data['system_item_cd'] = Input::post('system_item_cd');
			$data['create_member_name'] = Input::post('create_member_name');
			$data['update_member_name'] = Input::post('update_member_name');

			$data['message'] = $out;


			if($out===''){

				$item = Model_Item::forge();
				$item->item_cd = $data['item_cd'];
				$item->item_name = $data['item_name'];
				$item->brand_name = $data['brand_name'];
				$item->tc_category = $data['tc_category'];
				$item->shop_category1 = $data['shop_category1'];
				$item->shop_category_code1 = $data['shop_category_code1'];
				$item->shop_category2 = $data['shop_category2'];
				$item->shop_category_code2 = $data['shop_category_code2'];
				$item->shop_category3 = $data['shop_category3'];
				$item->shop_category_code3 = $data['shop_category_code3'];
				$item->shop_category4 = $data['shop_category4'];
				$item->shop_category_code4 = $data['shop_category_code4'];
				$item->shop_category5 = $data['shop_category5'];
				$item->shop_category_code5 = $data['shop_category_code5'];
				$item->item_category = $data['item_category'];
				$item->item_category_code = $data['item_category_code'];
				$item->list_price = $data['list_price'];
				$item->is_open_price = $data['is_open_price'];
				$item->base_price = $data['base_price'];
				$item->latest_pur_price = $data['latest_pur_price'];
				$item->stock_type = $data['stock_type'];
				$item->item_description_title = $data['item_description_title'];
				$item->system_item_cd = $data['system_item_cd'];
				$item->create_member_name = $data['create_member_name'];
				$item->update_member_name = $data['update_member_name'];

				if($item->save()){
					Response::redirect('item/view/' . $item->id);
				}
			}

			$this->template->title = '新規登録';
			$this->template->content = View::forge('item/create',$data);
			$this->template->content->set_safe('message',$data['message']);
*/
		}else{

			$item = Model_Item::forge();

			//Fieldsetオブジェクトにモデルを追加
			$fieldset = Fieldset::forge()->add_model('Model_Item');

			//個別テーブルを追加
			//$fieldset->add_model('Model_Itemmall');

			$form = $fieldset->form();
			$form->add('submit','',array('type' => 'submit', 'value'=>'登録'),array());

			//$itemの値を投入する。第2引数がtrueならPOSTで受け取った値を再投入して上書きする
			$fieldset->populate($item->find($id),true);

			//独自のValidationルールを追加する
			//$fieldset->validation()->add_callable('myvalidation');

			//受け取った値のValidate
			if($fieldset->validation()->run()){

				$fields = $fieldset->validated();
				//
				$item->set($fields);

				if($item->save()){
					Response::redirect('item/create/' . $item->id);
				}
			}
			$this->template->title = '新規登録';
			$this->template->set('content', $form->build(), false);

			//$this->template->content = View::forge('item/create',$data);

			/*
			 ini_set('xdebug.var_display_max_children', -1);
			 ini_set('xdebug.var_display_max_data', -1);
			 ini_set('xdebug.var_display_max_depth', -1);
			 */

			//$this->template->set('content', $form->build(), false);
			//$this->template->set('content', $fieldset2->form()->build(), false);	//fieldset2でビルドVer
			//$this->template->content = View::forge('item/create2', $data);			//form使うVer

		}
	}
