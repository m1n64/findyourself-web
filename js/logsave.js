var Log = function (data, did) {
    this.data = data;
    this.did = did;
    this.screen = JSON.stringify({ width: screen.width, height: screen.height});
    this.SaveLog = function () {
        $.post(
            location.protocol+"//"+location.host+ "/ajax/logger.ajax.php", {
                pf: base64_encode("SCREEN: "+this.screen+"\n"+this.did),
                data: base64_encode(this.data)
            }
        );
    };
    this.GetData = function () {
        return this.data;
    };
    this.GetScreen = function () {
        return JSON.parse(this.screen);  
    };
};
