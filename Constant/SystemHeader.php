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

/**
 * 系统HTTP头常量
 */
class SystemHeader {
    //签名Header
    const X_CA_SIGNATURE = "X-Ca-Signature";
    //所有参与签名的Header
    const X_CA_SIGNATURE_HEADERS = "X-Ca-Signature-Headers";
    //请求时间戳
    const X_CA_TIMESTAMP = "X-Ca-Timestamp";
    //请求放重放Nonce,15分钟内保持唯一,建议使用UUID
    const X_CA_NONCE = "X-Ca-Nonce";
    //APP KEY
    const X_CA_KEY = "X-Ca-Key";
	//请求 API的Stage，目前支持 TEST、PRE、RELEASE 三个 Stage，大小写不敏感，API 提供者可以选择发布到哪个 Stage，只有发布到指定 Stage 后 API //才可以调用，否则会提示 API 找不到或 Invalid Url。
	const X_CA_STAG="X-Ca-Stage";
	////是否开启 Debug 模式，大小写不敏感，不设置默认关闭，一般 API 调试阶段可以打开此设置
	const X_CA_REQUEST_MODE="X-Ca-Request-Mode";
}
