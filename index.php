<pre>
<?php
  $vid_id   = "-Ixd7sp7cWM";
  $data     = file_get_contents("http://youtube.com/get_video_info?video_id=".$vid_id);
  parse_str($data);
  $arr = explode(",",$url_encoded_fmt_stream_map);
  foreach ($arr as $item){
  	parse_str($item,$vdata);
  	print_r($vdata);
  }
  // parse_str($url_encoded_fmt_stream_map,$arr);
  // print_r($arr);
  //
?>
</pre>