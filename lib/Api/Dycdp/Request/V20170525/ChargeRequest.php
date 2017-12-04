<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace Aliyun\Api\Dycdp\Request\V20170525;

class ChargeRequest extends \Aliyun\Core\RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Dycdpapi", "2017-05-25", "Charge");
		$this->setMethod("POST");
	}

	private  $phoneNumber;

	private  $scope;

	private  $isProvince;

	private  $resourceOwnerAccount;

	private  $reason;

	private  $grade;

	private  $resourceOwnerId;

	private  $ownerId;

	private  $outId;

	public function getPhoneNumber() {
		return $this->phoneNumber;
	}

	public function setPhoneNumber($phoneNumber) {
		$this->phoneNumber = $phoneNumber;
		$this->queryParameters["PhoneNumber"]=$phoneNumber;
	}

	public function getScope() {
		return $this->scope;
	}

	public function setScope($scope) {
		$this->scope = $scope;
		$this->queryParameters["Scope"]=$scope;
	}

	public function getIsProvince() {
		return $this->isProvince;
	}

	public function setIsProvince($isProvince) {
		$this->isProvince = $isProvince;
		$this->queryParameters["IsProvince"]=$isProvince;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getReason() {
		return $this->reason;
	}

	public function setReason($reason) {
		$this->reason = $reason;
		$this->queryParameters["Reason"]=$reason;
	}

	public function getGrade() {
		return $this->grade;
	}

	public function setGrade($grade) {
		$this->grade = $grade;
		$this->queryParameters["Grade"]=$grade;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getOutId() {
		return $this->outId;
	}

	public function setOutId($outId) {
		$this->outId = $outId;
		$this->queryParameters["OutId"]=$outId;
	}
	
}