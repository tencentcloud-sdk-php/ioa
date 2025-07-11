<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 返回的具体Data数据
 *
 * @method Paging getPaging() 获取数据分页信息
 * @method void setPaging(Paging $Paging) 设置数据分页信息
 * @method array getItems() 获取设备列表
 * @method void setItems(array $Items) 设置设备列表
 */
class DescribeVirtualDevicesPageRsp extends AbstractModel
{
    /**
     * @var Paging 数据分页信息
     */
    public $Paging;

    /**
     * @var array 设备列表
     */
    public $Items;

    /**
     * @param Paging $Paging 数据分页信息
     * @param array $Items 设备列表
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Paging",$param) and $param["Paging"] !== null) {
            $this->Paging = new Paging();
            $this->Paging->deserialize($param["Paging"]);
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new DeviceDetail();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
