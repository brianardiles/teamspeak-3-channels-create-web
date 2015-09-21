<?php
require_once ("TeamSpeak3.php");
include ('config.php');
error_reporting(0);

$ChannelName = $_POST['name'];
$idUnica = $_POST['idts'];

if (!$ChannelName || !$idUnica) {
	echo "El nombre del channel y la ID unica tienen que estar";
	exit();
}

$ts3_VirtualServer = TeamSpeak3::factory("serverquery://" . $UserAdmin . ":" . $PWQuery . "@" . $IP_TS . ":" . $PuertoQuery . "/?server_port=" . $PuertoTS . "");
$ListaDeChannels = $ts3_VirtualServer->request("channellist")->toString();

if (strpos($ListaDeChannels, $ChannelName)) {
	echo "El nombre del channel esta en uso, utiliza otro";
	exit();
}

$clID = $ts3_VirtualServer->clientGetByUid($idUnica);
$top_cid = $ts3_VirtualServer->channelCreate(array(
	"channel_name" => $ChannelName,
	"channel_codec" => TeamSpeak3::CODEC_SPEEX_WIDEBAND,
	"channel_flag_permanent" => TRUE,
));

$clID = $ts3_VirtualServer->clientGetByUid($idUnica);
$infoCliente = $ts3_VirtualServer->execute("clientgetnamefromuid", array(
	"cluid" => $idUnica
))->toList();
$cldbid = strval($infoCliente['cldbid']);
$ts3_VirtualServer->execute("clientmove", array(
	"clid" => $clID,
	"cid" => $top_cid
));
$ts3_VirtualServer->execute("setclientchannelgroup", array(
	"cldbid" => $cldbid,
	"cid" => $top_cid,
	"cgid" => '5'
));
echo "El channel se creo correctamente."
?>