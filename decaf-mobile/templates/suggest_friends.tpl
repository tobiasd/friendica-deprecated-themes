
<div class="profile-match-wrapper">
	<div class="profile-match-photo">
		<a href="{{$url}}">
			<img src="{{$photo}}" alt="{{$name}}" width="80" height="80" title="{{$name}} [{{$url}}]" onError="this.src='../../../images/person-48.jpg';" />
		</a>
	</div>
	<div class="profile-match-break"></div>
	<div class="profile-match-name">
		<a href="{{$url}}" title="{{$name}}">{{$name}}</a>
	</div>
	<div class="profile-match-end"></div>
	{{if $connlnk}}
	<div class="profile-match-connect"><a href="{{$connlnk}}" title="{{$conntxt}}">{{$conntxt}}</a></div>
	{{/if}}
	<a href="{{$ignlnk}}&confirm=1" title="{{$ignore}}" class="icon drophide profile-match-ignore" id="profile-match-drop-{{$ignid}}" {{*onmouseout="imgdull(this);" onmouseover="imgbright(this);"*}} onclick="id=this.id;return confirmDelete(function(){changeHref(id, '{{$ignlnk}}')});" ></a>
</div>
