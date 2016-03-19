
    var oReq = new XMLHttpRequest(); //New request object
    var pgnList=[];


var FileManager =
{	
	filesRead: [],

  
	Init: function ()
	{
		var
			tblHeader = Append("table", document.body, null,"position:absolute;left:775px;top:96px;width:504px;border-right:solid 2px white;border-left:solid 2px white;border-spacing: 0px 0px;"),
			caption = Append("caption", tblHeader, "innerText=Famous Chess Games;", "font-size:25pt;color:white;margin-bottom:10px"),
			tr = Append("tr", tblHeader, null, null),
			style = "padding:2px;",
			th = Append("th", tr, "innerHTML=White;", style);
			th = Append("th", tr, "innerHTML=Black", style);
			th = Append("th", tr, "innerHTML=Date", style);

		var
			div = Append("div", document.body, "id=listDiv;", "position:absolute;left:775px;top:167px;width:500px;height:402px;border-right:solid 2px white;border-left:solid 2px white;border-bottom:solid 2px white;overflow: auto;"),
			tbl = Append("table", div, "id=tblGames", "width:480px;border-spacing: 0px 0px;");

		this.FillTable(tbl);
		PgnCtrl.Init();
	},

	FillTable: function(tbl)
	{
		var
			style = "padding:5px;color:#82e2fe",
			tr, row, o, p, link, fo, ws, we, bs, be, ds, de;
		Clear(tbl);

		for (var i = 0; i < pgnList.length; i++)
		{
			tr = Append("tr", tbl, "id=game" + i, null);
			tr.onclick = function (e)
			{
				row = null;
				for (var i = 0; i < tbl.rows.length; i++)
					FileManager.MarkRow(tbl.rows[i], "");
				FileManager.Activate(e.target.parentNode.id.substr(4), tbl);
			};
			o = pgnList[i];
			p = o.indexOf("White"); ws = o.indexOf(" ", p); we = o.indexOf("]", ws);
			p = o.indexOf("Black"); bs = o.indexOf(" ", p); be = o.indexOf("]", bs);
			p = o.indexOf("Date"); ds = o.indexOf(" ", p); de = o.indexOf("]", ds);
			Append("td", tr, "innerHTML=" + o.substring(ws, we), style);
			Append("td", tr, "innerHTML=" + o.substring(bs, be), style);
			Append("td", tr, "innerHTML=" + o.substring(ds, de), style);
		}
	},

	Activate: function (n, tbl)
	{
		this.MarkRow(tbl.rows[n], "#bbddff");
		this.SelectRow(n);
	},
	MarkRow: function (row, clr)
	{
		for (i = 0; i < row.cells.length; i++)
			row.cells[i].style.opacity = 100;
	},
	SelectRow: function (n)
	{
		PgnCtrl.ResetControls();
		PgnParcer.Reset();
		PgnParcer.Process(pgnList[n]);
		PgnCtrl.ResetPgn();
	},
	OnFileSelect: function (e)
	{
		var file = e.target.files[0], found = false;
		for (var i = 0; i < FileManager.filesRead.length; i++)
		{
			if (FileManager.filesRead[i] == file.name)
			{
				alert("This file has already been read!");
				found = true;
				return;
			}
		}
		Get("msg").style.display = "block";
		if (!found)
			FileManager.filesRead.push(file.name);
		var reader = new FileReader();
		reader.onload = function(e)
		{
			PgnParcer.Reset();
			PgnParcer.text = e.target.result.trim();
			PgnParcer.len = PgnParcer.text.length;
			FileManager.Parse();
		}
		reader.readAsText(file);
	},

	ParseInfo: function()
	{
		var
			info = [],
			text = "";
		PgnParcer.token = "";
		while (PgnParcer.ParseInfo())
			info.push({ key: PgnParcer.key, val: PgnParcer.value });
		for (var i = 0; i < info.length; i++)
		{
			var o = info[i];
			if (o.key == "Site" || o.key == "White" || o.key == "Black" || o.key == "Date" || o.key == "Result")
				text += "[" + o.key + " " + o.val.replace(/\"/g, "") + "]";
		}
		text += "\r\n";
		return text;
	},

	Parse: function()
	{
		while (PgnParcer.pos < PgnParcer.len)
		{
			var text = this.ParseInfo();
			PgnParcer.SkipSpace();
			while (true)
			{
				if (!PgnParcer.GetToken())
				{
					if (PgnParcer.pos == PgnParcer.len)
					{
						text += PgnParcer.token + " ";
						break;
					}
					else
					{
						alert("Parse pgn text error: " + PgnParcer.token);
						return;
					}
				}
				if (PgnParcer.token == "")
				{
					PgnParcer.SkipSpace();
					continue;
				}
				text += PgnParcer.token + " ";
				if (PgnParcer.IsEndOfGame(PgnParcer.token))
					break;
				PgnParcer.token = "";
			}
			pgnList.push(text);
		}
		this.FillTable(Get("tblGames"));
		Get("msg").style.display = "none";

	},
};



function start()
{
	 oReq.onload = function() 
    {

         var simple = this.responseText;
         var c=1,i=0,indexStart=0,indexEnd=0;
         for(i=0;i<simple.length;i++)
         {
         	if(simple.charAt(i) === "\"" && c%2!==0)
         	{
         		indexStart = i+1;
         		c++;
         	}
         	else if(simple.charAt(i) === "\"" && c%2===0)
         	{
         		indexEnd = i;
         		c++;
         		var simple1 = simple.substring(indexStart,indexEnd);
         		pgnList.push(simple1);
         	}
         }
    };
    oReq.open("get", "pgn.php", true);

    oReq.send();

	setTimeout(function(){FileManager.Init.call(FileManager);},100);
}

window.onload = start;