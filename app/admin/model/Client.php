<?php
namespace app\admin\model;
use think\Model;
use think\Db;

class Client extends Model
{     
   
   protected $table="ym_client";

	// //关联不良信息表（一对多）
    public function record()
    {
    		return $this->hasMany('BadRecord','client_id');
    }
 
	public function base()
    {
      return $this->hasOne('BaseMsg','client_id');
    }

   //添加客户
   public function add($data)
   {
	   if(!empty($data)) {
	   	    if(!empty($data['lou']) && !empty($data['hu'])){
     	        $data['lou'] = intval($data['lou']);
     	        $data['danyuan'] = intval($data['danyuan']);
     	        $data['hu'] = intval($data['hu']);
     	        $data['jilou'] = intval(substr($data['hu'],-4,-2));
     	        $data['jishi'] = intval(substr($data['hu'],-2));
     	        if(!empty($data['danyuan']) && $data['danyuan'] != 0){
     	            $data['housepos'] = $data['danyuan']*(($data['jilou']-1)*$data['huxing']+$data['jishi']);
     	        }else{
     	            $data['housepos'] = ($data['jilou']-1)*$data['huxing']+$data['jishi'];
     	        }
     	    }
            //根据身份证识别性别
     	    $sex ='';
     	    $sexnum = mb_substr($data['card_number'],-2,1);
			$yu = $sexnum%2;
			$sex = $yu?'1':'2';
			$sex_name=$yu?'男':'女';

		    $info = array(
			    'client_number' => 'A'.$data['card_number'],
			    'name' => $data['name'],
			    'sex' => $sex,
			    'sex_name' => $sex_name,
			    'type' => $data['type'],
			    'card_type' => $data['card_type'],
			    'card_number' => $data['card_number'],
			    'born_date' => strtotime($data['born_date']),
			    'nation_id' => $data['nation_id'],
			    'address' => $data['address'],
			    'tel_number' => $data['tel_number'],
			    'valid_time' => strtotime($data['valid_time']),
			    'belong_user_id' => $data['belong_user_id'],
			    'belong_username' => $data['belong_username'],
			    'belong_organization' => $data['belong_organization'],
			    'bankname' => $data['bankname'],
			    'issue_office' => $data['issue_office'],
			    'lat' => $data['lat'],
			    'lng' => $data['lng'],
			    'marriage_status'		=>$data['marriage_status'],
     		    'married_record_date'	=>strtotime($data['married_record_date']),
     		    'children'				=>$data['children'],
     			'is_farmer'				=>$data['is_farmer'],
     			'province'	=>$data['province'],
     			'city'	=>$data['city'],
     			'area'				=>$data['area'],
     		    'grid'				=>isset($data['grid'])?$data['grid']:'',
     		    'gridname'				=>$data['gridname'],
     			'current_address'		=>$data['current_address'],
				'current_postcode'		=>$data['current_postcode'],
     			'corresponding_address'	=>$data['corresponding_address'],
				'corresponding_postcode'	=>$data['corresponding_postcode'],
				'highest_degree'		=>$data['highest_degree'],
     			'highest_education'		=>$data['highest_education'],
     			'industry_category'		=>$data['industry_category'],
				'live_status'		=>$data['live_status'],
				'physical_condition'		=>$data['physical_condition'],
				'is_poor'		=>$data['is_poor'],
     		    'workunit'		=>$data['workunit'],
     		    'housenum'		=>$data['lou'].$data['danyuan'].sprintf("%04d",$data['hu']),
     		    'housepos'		=>isset($data['housepos'])?$data['housepos']:'',
     		    'huxing'		=>$data['huxing'],
				'class_result'		=>$data['class_result'],
                'family_people'	=>$data['family_people'],
                'family_money'				=>$data['family_money'],
                'family_debt'				=>$data['family_debt'],
                'family_year_income'	=>$data['family_year_income'],
                'family_year_spending'	=>$data['family_year_spending'],
                'add_time'				=>time()
		   );

		   $result = Db::name('client')->insert($info);
		   return $result;
	   }
	   return false;
   }

   //修改客户信息
   public function edit($data)
   {
   		if(!empty($data)) {
   			if(!empty($data['lou']) && !empty($data['hu'])){
		        $data['lou'] = intval($data['lou']);
		        $data['danyuan'] = intval($data['danyuan']);
		        $data['hu'] = intval($data['hu']);
		        $data['jilou'] = intval(substr($data['hu'],-4,-2));
		        $data['jishi'] = intval(substr($data['hu'],-2));
		        if(!empty($data['danyuan']) && $data['danyuan'] != 0){
     	            $data['housepos'] = $data['danyuan']*(($data['jilou']-1)*$data['huxing']+$data['jishi']);
     	        }else{
     	            $data['housepos'] = ($data['jilou']-1)*$data['huxing']+$data['jishi'];
     	        }
		    }

		    $sex ='';
     	    $sexnum = mb_substr($data['card_number'],-2,1);

			$yu = $sexnum%2;
			$sex = $yu?'1':'2';
			$sex_name=$yu?'男':'女';

			$info = array(
				'name' => $data['name'],
				'sex' => $sex,
				'sex_name' => $sex_name,
				'type' => $data['type'],
				'card_type' => $data['card_type'],
				'card_number' => $data['card_number'],
				'born_date' => strtotime($data['born_date']),
				'nation_id' => $data['nation_id'],
				'address' => $data['address'],
				'tel_number' => $data['tel_number'],
				'valid_time' => strtotime($data['valid_time']),
				'belong_user_id' => $data['belong_user_id'],
				'belong_organization' => $data['belong_organization'],
				'issue_office' => $data['issue_office'],
				'lat' => $data['lat'],
				'lng' => $data['lng'],
				'marriage_status'		=>$data['marriage_status'],
				'married_record_date'	=>strtotime($data['married_record_date']),
				'children'				=>$data['children'],
				'is_farmer'				=>$data['is_farmer'],
				'province'	=>$data['province'],
				'city'	=>$data['city'],
				'area'				=>$data['area'],
			    'grid'				=>isset($data['grid'])?$data['grid']:'',
			    'gridname'				=>$data['gridname'],
				'current_address'		=>$data['current_address'],
				'current_postcode'		=>$data['current_postcode'],
				'corresponding_address'	=>$data['corresponding_address'],
				'corresponding_postcode'	=>$data['corresponding_postcode'],
				'highest_degree'		=>$data['highest_degree'],
				'highest_education'		=>$data['highest_education'],
				'industry_category'		=>$data['industry_category'],
				'live_status'		=>$data['live_status'],
				'physical_condition'		=>$data['physical_condition'],
				'is_poor'		=>$data['is_poor'],
			    'workunit'		=>$data['workunit'],
			    'housenum'		=>intval($data['lou']).$data['danyuan'].sprintf("%04d",$data['hu']),
			    'housepos'		=>isset($data['housepos'])?$data['housepos']:'',
			    'huxing'		=>$data['huxing'],
			    'class_result'		=>$data['class_result'],
                'family_people'	=>$data['family_people'],
                'family_money'				=>$data['family_money'],
                'family_debt'				=>$data['family_debt'],
                'family_year_income'	=>$data['family_year_income'],
                'family_year_spending'	=>$data['family_year_spending']
			);

			$result = Db::name('client')->where('id', $data['id'])->update($info);
			if ($result) {
				return true;
			} else {
				return false;
			}
		}
   		return false;

   }

}

