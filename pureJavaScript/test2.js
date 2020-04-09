/*свойству обьекта runtime присваиваем параметр runtime*/
MT.p_.rA = function (runtime) {
    this.runtime = runtime;
};

(function () {
    var pl_Proto = MT.p_.rA.prototype;

    pl_Proto.Type = function (pl_) {
        this.pl_ = pl_;
        this.runtime = pl_.runtime;
    };

    var typeProto = pl_Proto.Type.prototype;

    typeProto.onCreate = function () {
    };


    pl_Proto.Instance = function (type) {
        this.type = type;
        this.runtime = type.runtime;
    };

    var instanceProto = pl_Proto.Instance.prototype;
    /**/
    instanceProto.onCreate = function () {
        this.cx = this.properties[0];

        this.start = this.properties[1]; /* start Value */

        this.arr = new Array(this.cx);

        this.scr();
    };

    instanceProto.scr = function () {
        for (var i = 0;
             i < this.arr.length;
             i++
        ) {
            var rn = Math.floor(Math.random() * this.arr.length);
            this.arr[i] = rn + this.start;
            for (var j = 0; j < i; j++) {
                if (this.arr[j] == (rn + this.start)) {
                    j = -1;
                    rn = Math.floor(Math.random() * this.arr.length);
                    this.arr[i] = rn + this.start;
                }
            }
        }
    }

    instanceProto.at = function (x) {
        /*Округляем x*/
        x = Math.floor(x);

        if (x < 0)
            return 0;
        if (x > this.cx - 1)
            return 0;

        return this.arr[x];
    };

    pl_Proto.cnds = {};
    var cnds = pl_Proto.cnds;

    cnds.CompareX = function (x, cmp, val) {
        return cr.do_cmp(this.at(x), cmp, val);
    };


    pl_Proto.acts = {};
    var acts = pl_Proto.acts;

    acts.NewScr = function () {
        this.scr();
    };


    pl_Proto.exps = {};
    var exps = pl_Proto.exps;

    exps.At = function (ret, x) {
        var val = this.at(x);

        if (typeof val === "string")
            ret.set_string(val);
        else
            ret.set_float(val);
    };

    exps.Width = function (ret) {
        ret.set_int(this.cx);
    };

    exps.StartValue = function (ret) {
        ret.set_int(this.start);
    };

}());