<php?

	public function action_create($id = 0)
	{

		$data = [];

		//�f�[�^�̔z����������Ă���
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


		//POST�̏ꍇ
//		if(Input::method() == 'POST'){

		if(false){
/*
			$val = Validation::forge();
			//Validation�N���X��Field��o�^
			$val->add('item_cd','���i�R�[�h')
			    ->add_rule('required')
			    ->add_rule('max_length',100);

			$val->add('item_name','���i��')
				->add_rule('required')
				->add_rule('max_length',300);

			$val->add('brand_name','�u�����h��')
				->add_rule('required')
				->add_rule('max_length',100);

			$val->add('tc_category','TC�J�e�S��')
				->add_rule('required')
				->add_rule('max_length',100);

			$val->add('shop_category1','�X�ܓ��J�e�S��1')
				->add_rule('required')
				->add_rule('max_length',300);

			$val->add('shop_category_code1','�X�ܓ��J�e�S���R�[�h1')
				->add_rule('required')
				->add_rule('max_length',50);

			$val->add('shop_category2','�X�ܓ��J�e�S��2')
				->add_rule('max_length',300);

			$val->add('shop_category_code2','�X�ܓ��J�e�S���R�[�h2')
				->add_rule('max_length',50);

			$val->add('shop_category3','�X�ܓ��J�e�S��3')
				->add_rule('max_length',300);

			$val->add('shop_category_code3','�X�ܓ��J�e�S���R�[�h3')
				->add_rule('max_length',50);

			$val->add('shop_category4','�X�ܓ��J�e�S��4')
				->add_rule('max_length',300);

			$val->add('shop_category_code4','�X�ܓ��J�e�S���R�[�h4')
				->add_rule('max_length',50);

			$val->add('shop_category5','�X�ܓ��J�e�S��5')
				->add_rule('max_length',300);

			$val->add('shop_category_code5','�X�ܓ��J�e�S���R�[�h5')
				->add_rule('max_length',50);

			$val->add('item_category','���i�擾�J�e�S��')
				->add_rule('max_length',300);

			$val->add('item_category_code','���i�擾�J�e�S���R�[�h')
				->add_rule('max_length',50);

			$val->add('list_price','�艿')
				->add_rule('max_length',8)
				->add_rule('valid_string',array('numeric'));

			$val->add('is_open_price','�I�[�v�����i')
				->add_rule('required')
				->add_rule('max_length',1)
				->add_rule('valid_string',array('numeric'));

			$val->add('base_price','�̔�����i')
				->add_rule('max_length',8)
				->add_rule('valid_string',array('numeric'));

			$val->add('latest_pur_price','�ŏI�d������z')
				->add_rule('max_length',8)
				->add_rule('valid_string',array('numeric'));

			$val->add('stock_type','�݌Ƀ^�C�v')
				->add_rule('required')
				->add_rule('max_length',1)
				->add_rule('valid_string',array('numeric'));

			$val->add('item_description_title','���i�����^�C�g��')
				->add_rule('max_length',300);

			$val->add('system_item_cd','��V�X�e�����i�R�[�h')
				->add_rule('required')
				->add_rule('max_length',100);

			$val->add('create_member_name','�쐬��')
				->add_rule('required')
				->add_rule('max_length',50);

			$val->add('update_member_name','�ŏI�X�V��')
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

			//post���ꂽ�l���󂯎��
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

			$this->template->title = '�V�K�o�^';
			$this->template->content = View::forge('item/create',$data);
			$this->template->content->set_safe('message',$data['message']);
*/
		}else{

			$item = Model_Item::forge();

			//Fieldset�I�u�W�F�N�g�Ƀ��f����ǉ�
			$fieldset = Fieldset::forge()->add_model('Model_Item');

			//�ʃe�[�u����ǉ�
			//$fieldset->add_model('Model_Itemmall');

			$form = $fieldset->form();
			$form->add('submit','',array('type' => 'submit', 'value'=>'�o�^'),array());

			//$item�̒l�𓊓�����B��2������true�Ȃ�POST�Ŏ󂯎�����l���ē������ď㏑������
			$fieldset->populate($item->find($id),true);

			//�Ǝ���Validation���[����ǉ�����
			//$fieldset->validation()->add_callable('myvalidation');

			//�󂯎�����l��Validate
			if($fieldset->validation()->run()){

				$fields = $fieldset->validated();
				//
				$item->set($fields);

				if($item->save()){
					Response::redirect('item/create/' . $item->id);
				}
			}
			$this->template->title = '�V�K�o�^';
			$this->template->set('content', $form->build(), false);

			//$this->template->content = View::forge('item/create',$data);

			/*
			 ini_set('xdebug.var_display_max_children', -1);
			 ini_set('xdebug.var_display_max_data', -1);
			 ini_set('xdebug.var_display_max_depth', -1);
			 */

			//$this->template->set('content', $form->build(), false);
			//$this->template->set('content', $fieldset2->form()->build(), false);	//fieldset2�Ńr���hVer
			//$this->template->content = View::forge('item/create2', $data);			//form�g��Ver

		}
	}
