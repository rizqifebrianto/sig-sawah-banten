var wms_layers = [];


        var lyr_EsriSatellite_0 = new ol.layer.Tile({
            'title': 'Esri Satellite',
            //'type': 'base',
            'opacity': 1.000000,
            
            
            source: new ol.source.XYZ({
    attributions: ' ',
                url: 'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}'
            })
        });
var format_KotaCilegon_1 = new ol.format.GeoJSON();
var features_KotaCilegon_1 = format_KotaCilegon_1.readFeatures(json_KotaCilegon_1, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_KotaCilegon_1 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_KotaCilegon_1.addFeatures(features_KotaCilegon_1);
var lyr_KotaCilegon_1 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_KotaCilegon_1, 
                style: style_KotaCilegon_1,
                popuplayertitle: "Kota Cilegon",
                interactive: true,
                title: '<img src="styles/legend/KotaCilegon_1.png" /> Kota Cilegon'
            });
var format_KotaSerang_2 = new ol.format.GeoJSON();
var features_KotaSerang_2 = format_KotaSerang_2.readFeatures(json_KotaSerang_2, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_KotaSerang_2 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_KotaSerang_2.addFeatures(features_KotaSerang_2);
var lyr_KotaSerang_2 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_KotaSerang_2, 
                style: style_KotaSerang_2,
                popuplayertitle: "Kota Serang",
                interactive: true,
                title: '<img src="styles/legend/KotaSerang_2.png" /> Kota Serang'
            });
var format_KotaTangerang_3 = new ol.format.GeoJSON();
var features_KotaTangerang_3 = format_KotaTangerang_3.readFeatures(json_KotaTangerang_3, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_KotaTangerang_3 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_KotaTangerang_3.addFeatures(features_KotaTangerang_3);
var lyr_KotaTangerang_3 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_KotaTangerang_3, 
                style: style_KotaTangerang_3,
                popuplayertitle: "Kota Tangerang",
                interactive: true,
                title: '<img src="styles/legend/KotaTangerang_3.png" /> Kota Tangerang'
            });
var format_KotaTangerangSelatan_4 = new ol.format.GeoJSON();
var features_KotaTangerangSelatan_4 = format_KotaTangerangSelatan_4.readFeatures(json_KotaTangerangSelatan_4, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_KotaTangerangSelatan_4 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_KotaTangerangSelatan_4.addFeatures(features_KotaTangerangSelatan_4);
var lyr_KotaTangerangSelatan_4 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_KotaTangerangSelatan_4, 
                style: style_KotaTangerangSelatan_4,
                popuplayertitle: "Kota Tangerang Selatan",
                interactive: true,
                title: '<img src="styles/legend/KotaTangerangSelatan_4.png" /> Kota Tangerang Selatan'
            });
var format_Lebak_5 = new ol.format.GeoJSON();
var features_Lebak_5 = format_Lebak_5.readFeatures(json_Lebak_5, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_Lebak_5 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_Lebak_5.addFeatures(features_Lebak_5);
var lyr_Lebak_5 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_Lebak_5, 
                style: style_Lebak_5,
                popuplayertitle: "Lebak",
                interactive: true,
                title: '<img src="styles/legend/Lebak_5.png" /> Lebak'
            });
var format_Pandeglang_6 = new ol.format.GeoJSON();
var features_Pandeglang_6 = format_Pandeglang_6.readFeatures(json_Pandeglang_6, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_Pandeglang_6 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_Pandeglang_6.addFeatures(features_Pandeglang_6);
var lyr_Pandeglang_6 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_Pandeglang_6, 
                style: style_Pandeglang_6,
                popuplayertitle: "Pandeglang",
                interactive: true,
                title: '<img src="styles/legend/Pandeglang_6.png" /> Pandeglang'
            });
var format_Serang_7 = new ol.format.GeoJSON();
var features_Serang_7 = format_Serang_7.readFeatures(json_Serang_7, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_Serang_7 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_Serang_7.addFeatures(features_Serang_7);
var lyr_Serang_7 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_Serang_7, 
                style: style_Serang_7,
                popuplayertitle: "Serang",
                interactive: true,
                title: '<img src="styles/legend/Serang_7.png" /> Serang'
            });
var format_Tangerang_8 = new ol.format.GeoJSON();
var features_Tangerang_8 = format_Tangerang_8.readFeatures(json_Tangerang_8, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_Tangerang_8 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_Tangerang_8.addFeatures(features_Tangerang_8);
var lyr_Tangerang_8 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_Tangerang_8, 
                style: style_Tangerang_8,
                popuplayertitle: "Tangerang",
                interactive: true,
                title: '<img src="styles/legend/Tangerang_8.png" /> Tangerang'
            });
var format_SawahKotaCilegon_9 = new ol.format.GeoJSON();
var features_SawahKotaCilegon_9 = format_SawahKotaCilegon_9.readFeatures(json_SawahKotaCilegon_9, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_SawahKotaCilegon_9 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_SawahKotaCilegon_9.addFeatures(features_SawahKotaCilegon_9);
var lyr_SawahKotaCilegon_9 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_SawahKotaCilegon_9, 
                style: style_SawahKotaCilegon_9,
                popuplayertitle: "Sawah Kota Cilegon ",
                interactive: true,
                title: '<img src="styles/legend/SawahKotaCilegon_9.png" /> Sawah Kota Cilegon '
            });
var format_SawahKotaSerang_10 = new ol.format.GeoJSON();
var features_SawahKotaSerang_10 = format_SawahKotaSerang_10.readFeatures(json_SawahKotaSerang_10, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_SawahKotaSerang_10 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_SawahKotaSerang_10.addFeatures(features_SawahKotaSerang_10);
var lyr_SawahKotaSerang_10 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_SawahKotaSerang_10, 
                style: style_SawahKotaSerang_10,
                popuplayertitle: "Sawah Kota Serang",
                interactive: true,
                title: '<img src="styles/legend/SawahKotaSerang_10.png" /> Sawah Kota Serang'
            });
var format_SawahKotaTangerang_11 = new ol.format.GeoJSON();
var features_SawahKotaTangerang_11 = format_SawahKotaTangerang_11.readFeatures(json_SawahKotaTangerang_11, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_SawahKotaTangerang_11 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_SawahKotaTangerang_11.addFeatures(features_SawahKotaTangerang_11);
var lyr_SawahKotaTangerang_11 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_SawahKotaTangerang_11, 
                style: style_SawahKotaTangerang_11,
                popuplayertitle: "Sawah Kota Tangerang",
                interactive: true,
                title: '<img src="styles/legend/SawahKotaTangerang_11.png" /> Sawah Kota Tangerang'
            });
var format_SawahKotaTangerangSelatan_12 = new ol.format.GeoJSON();
var features_SawahKotaTangerangSelatan_12 = format_SawahKotaTangerangSelatan_12.readFeatures(json_SawahKotaTangerangSelatan_12, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_SawahKotaTangerangSelatan_12 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_SawahKotaTangerangSelatan_12.addFeatures(features_SawahKotaTangerangSelatan_12);
var lyr_SawahKotaTangerangSelatan_12 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_SawahKotaTangerangSelatan_12, 
                style: style_SawahKotaTangerangSelatan_12,
                popuplayertitle: "Sawah Kota Tangerang Selatan",
                interactive: true,
                title: '<img src="styles/legend/SawahKotaTangerangSelatan_12.png" /> Sawah Kota Tangerang Selatan'
            });
var format_SawahLebak_13 = new ol.format.GeoJSON();
var features_SawahLebak_13 = format_SawahLebak_13.readFeatures(json_SawahLebak_13, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_SawahLebak_13 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_SawahLebak_13.addFeatures(features_SawahLebak_13);
var lyr_SawahLebak_13 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_SawahLebak_13, 
                style: style_SawahLebak_13,
                popuplayertitle: "Sawah Lebak",
                interactive: true,
                title: '<img src="styles/legend/SawahLebak_13.png" /> Sawah Lebak'
            });
var format_SawahPandeglang_14 = new ol.format.GeoJSON();
var features_SawahPandeglang_14 = format_SawahPandeglang_14.readFeatures(json_SawahPandeglang_14, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_SawahPandeglang_14 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_SawahPandeglang_14.addFeatures(features_SawahPandeglang_14);
var lyr_SawahPandeglang_14 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_SawahPandeglang_14, 
                style: style_SawahPandeglang_14,
                popuplayertitle: "Sawah Pandeglang",
                interactive: true,
                title: '<img src="styles/legend/SawahPandeglang_14.png" /> Sawah Pandeglang'
            });
var format_SawahSerang_15 = new ol.format.GeoJSON();
var features_SawahSerang_15 = format_SawahSerang_15.readFeatures(json_SawahSerang_15, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_SawahSerang_15 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_SawahSerang_15.addFeatures(features_SawahSerang_15);
var lyr_SawahSerang_15 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_SawahSerang_15, 
                style: style_SawahSerang_15,
                popuplayertitle: "Sawah Serang",
                interactive: true,
                title: '<img src="styles/legend/SawahSerang_15.png" /> Sawah Serang'
            });
var format_SawahTangerang_16 = new ol.format.GeoJSON();
var features_SawahTangerang_16 = format_SawahTangerang_16.readFeatures(json_SawahTangerang_16, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_SawahTangerang_16 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_SawahTangerang_16.addFeatures(features_SawahTangerang_16);
var lyr_SawahTangerang_16 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_SawahTangerang_16, 
                style: style_SawahTangerang_16,
                popuplayertitle: "Sawah Tangerang",
                interactive: true,
                title: '<img src="styles/legend/SawahTangerang_16.png" /> Sawah Tangerang'
            });
var group_Sawah = new ol.layer.Group({
                                layers: [lyr_SawahKotaCilegon_9,lyr_SawahKotaSerang_10,lyr_SawahKotaTangerang_11,lyr_SawahKotaTangerangSelatan_12,lyr_SawahLebak_13,lyr_SawahPandeglang_14,lyr_SawahSerang_15,lyr_SawahTangerang_16,],
                                fold: "open",
                                title: "Sawah"});
var group_Daerah = new ol.layer.Group({
                                layers: [lyr_KotaCilegon_1,lyr_KotaSerang_2,lyr_KotaTangerang_3,lyr_KotaTangerangSelatan_4,lyr_Lebak_5,lyr_Pandeglang_6,lyr_Serang_7,lyr_Tangerang_8,],
                                fold: "open",
                                title: "Daerah"});

lyr_EsriSatellite_0.setVisible(true);lyr_KotaCilegon_1.setVisible(true);lyr_KotaSerang_2.setVisible(true);lyr_KotaTangerang_3.setVisible(true);lyr_KotaTangerangSelatan_4.setVisible(true);lyr_Lebak_5.setVisible(true);lyr_Pandeglang_6.setVisible(true);lyr_Serang_7.setVisible(true);lyr_Tangerang_8.setVisible(true);lyr_SawahKotaCilegon_9.setVisible(true);lyr_SawahKotaSerang_10.setVisible(true);lyr_SawahKotaTangerang_11.setVisible(true);lyr_SawahKotaTangerangSelatan_12.setVisible(true);lyr_SawahLebak_13.setVisible(true);lyr_SawahPandeglang_14.setVisible(true);lyr_SawahSerang_15.setVisible(true);lyr_SawahTangerang_16.setVisible(true);
var layersList = [lyr_EsriSatellite_0,group_Daerah,group_Sawah];
lyr_KotaCilegon_1.set('fieldAliases', {'fid': 'fid', 'KDPPUM': 'KDPPUM', 'NAMOBJ': 'NAMOBJ', 'REMARK': 'REMARK', 'KDPBPS': 'KDPBPS', 'FCODE': 'FCODE', 'LUASWH': 'LUASWH', 'UUPP': 'UUPP', 'SRS_ID': 'SRS_ID', 'LCODE': 'LCODE', 'METADATA': 'METADATA', 'KDEBPS': 'KDEBPS', 'KDEPUM': 'KDEPUM', 'KDCBPS': 'KDCBPS', 'KDCPUM': 'KDCPUM', 'KDBBPS': 'KDBBPS', 'KDBPUM': 'KDBPUM', 'WADMKD': 'WADMKD', 'WIADKD': 'WIADKD', 'WADMKC': 'WADMKC', 'WIADKC': 'WIADKC', 'WADMKK': 'WADMKK', 'WIADKK': 'WIADKK', 'WADMPR': 'WADMPR', 'WIADPR': 'WIADPR', 'TIPADM': 'TIPADM', 'SHAPE_Leng': 'SHAPE_Leng', 'SHAPE_Area': 'SHAPE_Area', });
lyr_KotaSerang_2.set('fieldAliases', {'fid': 'fid', 'KDPPUM': 'KDPPUM', 'NAMOBJ': 'NAMOBJ', 'REMARK': 'REMARK', 'KDPBPS': 'KDPBPS', 'FCODE': 'FCODE', 'LUASWH': 'LUASWH', 'UUPP': 'UUPP', 'SRS_ID': 'SRS_ID', 'LCODE': 'LCODE', 'METADATA': 'METADATA', 'KDEBPS': 'KDEBPS', 'KDEPUM': 'KDEPUM', 'KDCBPS': 'KDCBPS', 'KDCPUM': 'KDCPUM', 'KDBBPS': 'KDBBPS', 'KDBPUM': 'KDBPUM', 'WADMKD': 'WADMKD', 'WIADKD': 'WIADKD', 'WADMKC': 'WADMKC', 'WIADKC': 'WIADKC', 'WADMKK': 'WADMKK', 'WIADKK': 'WIADKK', 'WADMPR': 'WADMPR', 'WIADPR': 'WIADPR', 'TIPADM': 'TIPADM', 'SHAPE_Leng': 'SHAPE_Leng', 'SHAPE_Area': 'SHAPE_Area', });
lyr_KotaTangerang_3.set('fieldAliases', {'fid': 'fid', 'KDPPUM': 'KDPPUM', 'NAMOBJ': 'NAMOBJ', 'REMARK': 'REMARK', 'KDPBPS': 'KDPBPS', 'FCODE': 'FCODE', 'LUASWH': 'LUASWH', 'UUPP': 'UUPP', 'SRS_ID': 'SRS_ID', 'LCODE': 'LCODE', 'METADATA': 'METADATA', 'KDEBPS': 'KDEBPS', 'KDEPUM': 'KDEPUM', 'KDCBPS': 'KDCBPS', 'KDCPUM': 'KDCPUM', 'KDBBPS': 'KDBBPS', 'KDBPUM': 'KDBPUM', 'WADMKD': 'WADMKD', 'WIADKD': 'WIADKD', 'WADMKC': 'WADMKC', 'WIADKC': 'WIADKC', 'WADMKK': 'WADMKK', 'WIADKK': 'WIADKK', 'WADMPR': 'WADMPR', 'WIADPR': 'WIADPR', 'TIPADM': 'TIPADM', 'SHAPE_Leng': 'SHAPE_Leng', 'SHAPE_Area': 'SHAPE_Area', });
lyr_KotaTangerangSelatan_4.set('fieldAliases', {'fid': 'fid', 'KDPPUM': 'KDPPUM', 'NAMOBJ': 'NAMOBJ', 'REMARK': 'REMARK', 'KDPBPS': 'KDPBPS', 'FCODE': 'FCODE', 'LUASWH': 'LUASWH', 'UUPP': 'UUPP', 'SRS_ID': 'SRS_ID', 'LCODE': 'LCODE', 'METADATA': 'METADATA', 'KDEBPS': 'KDEBPS', 'KDEPUM': 'KDEPUM', 'KDCBPS': 'KDCBPS', 'KDCPUM': 'KDCPUM', 'KDBBPS': 'KDBBPS', 'KDBPUM': 'KDBPUM', 'WADMKD': 'WADMKD', 'WIADKD': 'WIADKD', 'WADMKC': 'WADMKC', 'WIADKC': 'WIADKC', 'WADMKK': 'WADMKK', 'WIADKK': 'WIADKK', 'WADMPR': 'WADMPR', 'WIADPR': 'WIADPR', 'TIPADM': 'TIPADM', 'SHAPE_Leng': 'SHAPE_Leng', 'SHAPE_Area': 'SHAPE_Area', });
lyr_Lebak_5.set('fieldAliases', {'fid': 'fid', 'KDPPUM': 'KDPPUM', 'NAMOBJ': 'NAMOBJ', 'REMARK': 'REMARK', 'KDPBPS': 'KDPBPS', 'FCODE': 'FCODE', 'LUASWH': 'LUASWH', 'UUPP': 'UUPP', 'SRS_ID': 'SRS_ID', 'LCODE': 'LCODE', 'METADATA': 'METADATA', 'KDEBPS': 'KDEBPS', 'KDEPUM': 'KDEPUM', 'KDCBPS': 'KDCBPS', 'KDCPUM': 'KDCPUM', 'KDBBPS': 'KDBBPS', 'KDBPUM': 'KDBPUM', 'WADMKD': 'WADMKD', 'WIADKD': 'WIADKD', 'WADMKC': 'WADMKC', 'WIADKC': 'WIADKC', 'WADMKK': 'WADMKK', 'WIADKK': 'WIADKK', 'WADMPR': 'WADMPR', 'WIADPR': 'WIADPR', 'TIPADM': 'TIPADM', 'SHAPE_Leng': 'SHAPE_Leng', 'SHAPE_Area': 'SHAPE_Area', });
lyr_Pandeglang_6.set('fieldAliases', {'fid': 'fid', 'KDPPUM': 'KDPPUM', 'NAMOBJ': 'NAMOBJ', 'REMARK': 'REMARK', 'KDPBPS': 'KDPBPS', 'FCODE': 'FCODE', 'LUASWH': 'LUASWH', 'UUPP': 'UUPP', 'SRS_ID': 'SRS_ID', 'LCODE': 'LCODE', 'METADATA': 'METADATA', 'KDEBPS': 'KDEBPS', 'KDEPUM': 'KDEPUM', 'KDCBPS': 'KDCBPS', 'KDCPUM': 'KDCPUM', 'KDBBPS': 'KDBBPS', 'KDBPUM': 'KDBPUM', 'WADMKD': 'WADMKD', 'WIADKD': 'WIADKD', 'WADMKC': 'WADMKC', 'WIADKC': 'WIADKC', 'WADMKK': 'WADMKK', 'WIADKK': 'WIADKK', 'WADMPR': 'WADMPR', 'WIADPR': 'WIADPR', 'TIPADM': 'TIPADM', 'SHAPE_Leng': 'SHAPE_Leng', 'SHAPE_Area': 'SHAPE_Area', });
lyr_Serang_7.set('fieldAliases', {'fid': 'fid', 'KDPPUM': 'KDPPUM', 'NAMOBJ': 'NAMOBJ', 'REMARK': 'REMARK', 'KDPBPS': 'KDPBPS', 'FCODE': 'FCODE', 'LUASWH': 'LUASWH', 'UUPP': 'UUPP', 'SRS_ID': 'SRS_ID', 'LCODE': 'LCODE', 'METADATA': 'METADATA', 'KDEBPS': 'KDEBPS', 'KDEPUM': 'KDEPUM', 'KDCBPS': 'KDCBPS', 'KDCPUM': 'KDCPUM', 'KDBBPS': 'KDBBPS', 'KDBPUM': 'KDBPUM', 'WADMKD': 'WADMKD', 'WIADKD': 'WIADKD', 'WADMKC': 'WADMKC', 'WIADKC': 'WIADKC', 'WADMKK': 'WADMKK', 'WIADKK': 'WIADKK', 'WADMPR': 'WADMPR', 'WIADPR': 'WIADPR', 'TIPADM': 'TIPADM', 'SHAPE_Leng': 'SHAPE_Leng', 'SHAPE_Area': 'SHAPE_Area', });
lyr_Tangerang_8.set('fieldAliases', {'fid': 'fid', 'KDPPUM': 'KDPPUM', 'NAMOBJ': 'NAMOBJ', 'REMARK': 'REMARK', 'KDPBPS': 'KDPBPS', 'FCODE': 'FCODE', 'LUASWH': 'LUASWH', 'UUPP': 'UUPP', 'SRS_ID': 'SRS_ID', 'LCODE': 'LCODE', 'METADATA': 'METADATA', 'KDEBPS': 'KDEBPS', 'KDEPUM': 'KDEPUM', 'KDCBPS': 'KDCBPS', 'KDCPUM': 'KDCPUM', 'KDBBPS': 'KDBBPS', 'KDBPUM': 'KDBPUM', 'WADMKD': 'WADMKD', 'WIADKD': 'WIADKD', 'WADMKC': 'WADMKC', 'WIADKC': 'WIADKC', 'WADMKK': 'WADMKK', 'WIADKK': 'WIADKK', 'WADMPR': 'WADMPR', 'WIADPR': 'WIADPR', 'TIPADM': 'TIPADM', 'SHAPE_Leng': 'SHAPE_Leng', 'SHAPE_Area': 'SHAPE_Area', });
lyr_SawahKotaCilegon_9.set('fieldAliases', {'gid': 'gid', 'namobj': 'namobj', 'jnsswh': 'jnsswh', 'fcode': 'fcode', 'aqdate': 'aqdate', 'pudate': 'pudate', 'remark': 'remark', 'kodlco': 'kodlco', 'srs_id': 'srs_id', 'lcode': 'lcode', 'metadata': 'metadata', 'tnmswh': 'tnmswh', 'shape_leng': 'shape_leng', 'shape_area': 'shape_area', });
lyr_SawahKotaSerang_10.set('fieldAliases', {'gid': 'gid', 'namobj': 'namobj', 'jnsswh': 'jnsswh', 'fcode': 'fcode', 'aqdate': 'aqdate', 'pudate': 'pudate', 'remark': 'remark', 'kodlco': 'kodlco', 'srs_id': 'srs_id', 'lcode': 'lcode', 'metadata': 'metadata', 'tnmswh': 'tnmswh', 'shape_leng': 'shape_leng', 'shape_area': 'shape_area', });
lyr_SawahKotaTangerang_11.set('fieldAliases', {'gid': 'gid', 'namobj': 'namobj', 'jnsswh': 'jnsswh', 'fcode': 'fcode', 'aqdate': 'aqdate', 'pudate': 'pudate', 'remark': 'remark', 'kodlco': 'kodlco', 'srs_id': 'srs_id', 'lcode': 'lcode', 'metadata': 'metadata', 'tnmswh': 'tnmswh', 'shape_leng': 'shape_leng', 'shape_area': 'shape_area', });
lyr_SawahKotaTangerangSelatan_12.set('fieldAliases', {'gid': 'gid', 'namobj': 'namobj', 'jnsswh': 'jnsswh', 'fcode': 'fcode', 'aqdate': 'aqdate', 'pudate': 'pudate', 'remark': 'remark', 'kodlco': 'kodlco', 'srs_id': 'srs_id', 'lcode': 'lcode', 'metadata': 'metadata', 'tnmswh': 'tnmswh', 'shape_leng': 'shape_leng', 'shape_area': 'shape_area', });
lyr_SawahLebak_13.set('fieldAliases', {'gid': 'gid', 'namobj': 'namobj', 'jnsswh': 'jnsswh', 'fcode': 'fcode', 'aqdate': 'aqdate', 'pudate': 'pudate', 'remark': 'remark', 'kodlco': 'kodlco', 'srs_id': 'srs_id', 'lcode': 'lcode', 'metadata': 'metadata', 'tnmswh': 'tnmswh', 'shape_leng': 'shape_leng', 'shape_area': 'shape_area', });
lyr_SawahPandeglang_14.set('fieldAliases', {'gid': 'gid', 'namobj': 'namobj', 'jnsswh': 'jnsswh', 'fcode': 'fcode', 'aqdate': 'aqdate', 'pudate': 'pudate', 'remark': 'remark', 'kodlco': 'kodlco', 'srs_id': 'srs_id', 'lcode': 'lcode', 'metadata': 'metadata', 'tnmswh': 'tnmswh', 'shape_leng': 'shape_leng', 'shape_area': 'shape_area', });
lyr_SawahSerang_15.set('fieldAliases', {'gid': 'gid', 'namobj': 'namobj', 'jnsswh': 'jnsswh', 'fcode': 'fcode', 'aqdate': 'aqdate', 'pudate': 'pudate', 'remark': 'remark', 'kodlco': 'kodlco', 'srs_id': 'srs_id', 'lcode': 'lcode', 'metadata': 'metadata', 'tnmswh': 'tnmswh', 'shape_leng': 'shape_leng', 'shape_area': 'shape_area', });
lyr_SawahTangerang_16.set('fieldAliases', {'gid': 'gid', 'namobj': 'namobj', 'jnsswh': 'jnsswh', 'fcode': 'fcode', 'aqdate': 'aqdate', 'pudate': 'pudate', 'remark': 'remark', 'kodlco': 'kodlco', 'srs_id': 'srs_id', 'lcode': 'lcode', 'metadata': 'metadata', 'tnmswh': 'tnmswh', 'shape_leng': 'shape_leng', 'shape_area': 'shape_area', 'sum area': 'sum area', 'Area Km2': 'Area Km2', });
lyr_KotaCilegon_1.set('fieldImages', {'fid': 'TextEdit', 'KDPPUM': 'TextEdit', 'NAMOBJ': 'TextEdit', 'REMARK': 'TextEdit', 'KDPBPS': 'TextEdit', 'FCODE': 'TextEdit', 'LUASWH': 'TextEdit', 'UUPP': 'TextEdit', 'SRS_ID': 'TextEdit', 'LCODE': 'TextEdit', 'METADATA': 'TextEdit', 'KDEBPS': 'TextEdit', 'KDEPUM': 'TextEdit', 'KDCBPS': 'TextEdit', 'KDCPUM': 'TextEdit', 'KDBBPS': 'TextEdit', 'KDBPUM': 'TextEdit', 'WADMKD': 'TextEdit', 'WIADKD': 'TextEdit', 'WADMKC': 'TextEdit', 'WIADKC': 'TextEdit', 'WADMKK': 'TextEdit', 'WIADKK': 'TextEdit', 'WADMPR': 'TextEdit', 'WIADPR': 'TextEdit', 'TIPADM': 'TextEdit', 'SHAPE_Leng': 'TextEdit', 'SHAPE_Area': 'TextEdit', });
lyr_KotaSerang_2.set('fieldImages', {'fid': 'TextEdit', 'KDPPUM': 'TextEdit', 'NAMOBJ': 'TextEdit', 'REMARK': 'TextEdit', 'KDPBPS': 'TextEdit', 'FCODE': 'TextEdit', 'LUASWH': 'TextEdit', 'UUPP': 'TextEdit', 'SRS_ID': 'TextEdit', 'LCODE': 'TextEdit', 'METADATA': 'TextEdit', 'KDEBPS': 'TextEdit', 'KDEPUM': 'TextEdit', 'KDCBPS': 'TextEdit', 'KDCPUM': 'TextEdit', 'KDBBPS': 'TextEdit', 'KDBPUM': 'TextEdit', 'WADMKD': 'TextEdit', 'WIADKD': 'TextEdit', 'WADMKC': 'TextEdit', 'WIADKC': 'TextEdit', 'WADMKK': 'TextEdit', 'WIADKK': 'TextEdit', 'WADMPR': 'TextEdit', 'WIADPR': 'TextEdit', 'TIPADM': 'TextEdit', 'SHAPE_Leng': 'TextEdit', 'SHAPE_Area': 'TextEdit', });
lyr_KotaTangerang_3.set('fieldImages', {'fid': 'TextEdit', 'KDPPUM': 'TextEdit', 'NAMOBJ': 'TextEdit', 'REMARK': 'TextEdit', 'KDPBPS': 'TextEdit', 'FCODE': 'TextEdit', 'LUASWH': 'TextEdit', 'UUPP': 'TextEdit', 'SRS_ID': 'TextEdit', 'LCODE': 'TextEdit', 'METADATA': 'TextEdit', 'KDEBPS': 'TextEdit', 'KDEPUM': 'TextEdit', 'KDCBPS': 'TextEdit', 'KDCPUM': 'TextEdit', 'KDBBPS': 'TextEdit', 'KDBPUM': 'TextEdit', 'WADMKD': 'TextEdit', 'WIADKD': 'TextEdit', 'WADMKC': 'TextEdit', 'WIADKC': 'TextEdit', 'WADMKK': 'TextEdit', 'WIADKK': 'TextEdit', 'WADMPR': 'TextEdit', 'WIADPR': 'TextEdit', 'TIPADM': 'TextEdit', 'SHAPE_Leng': 'TextEdit', 'SHAPE_Area': 'TextEdit', });
lyr_KotaTangerangSelatan_4.set('fieldImages', {'fid': 'TextEdit', 'KDPPUM': 'TextEdit', 'NAMOBJ': 'TextEdit', 'REMARK': 'TextEdit', 'KDPBPS': 'TextEdit', 'FCODE': 'TextEdit', 'LUASWH': 'TextEdit', 'UUPP': 'TextEdit', 'SRS_ID': 'TextEdit', 'LCODE': 'TextEdit', 'METADATA': 'TextEdit', 'KDEBPS': 'TextEdit', 'KDEPUM': 'TextEdit', 'KDCBPS': 'TextEdit', 'KDCPUM': 'TextEdit', 'KDBBPS': 'TextEdit', 'KDBPUM': 'TextEdit', 'WADMKD': 'TextEdit', 'WIADKD': 'TextEdit', 'WADMKC': 'TextEdit', 'WIADKC': 'TextEdit', 'WADMKK': 'TextEdit', 'WIADKK': 'TextEdit', 'WADMPR': 'TextEdit', 'WIADPR': 'TextEdit', 'TIPADM': 'TextEdit', 'SHAPE_Leng': 'TextEdit', 'SHAPE_Area': 'TextEdit', });
lyr_Lebak_5.set('fieldImages', {'fid': 'TextEdit', 'KDPPUM': 'TextEdit', 'NAMOBJ': 'TextEdit', 'REMARK': 'TextEdit', 'KDPBPS': 'TextEdit', 'FCODE': 'TextEdit', 'LUASWH': 'TextEdit', 'UUPP': 'TextEdit', 'SRS_ID': 'TextEdit', 'LCODE': 'TextEdit', 'METADATA': 'TextEdit', 'KDEBPS': 'TextEdit', 'KDEPUM': 'TextEdit', 'KDCBPS': 'TextEdit', 'KDCPUM': 'TextEdit', 'KDBBPS': 'TextEdit', 'KDBPUM': 'TextEdit', 'WADMKD': 'TextEdit', 'WIADKD': 'TextEdit', 'WADMKC': 'TextEdit', 'WIADKC': 'TextEdit', 'WADMKK': 'TextEdit', 'WIADKK': 'TextEdit', 'WADMPR': 'TextEdit', 'WIADPR': 'TextEdit', 'TIPADM': 'TextEdit', 'SHAPE_Leng': 'TextEdit', 'SHAPE_Area': 'TextEdit', });
lyr_Pandeglang_6.set('fieldImages', {'fid': 'TextEdit', 'KDPPUM': 'TextEdit', 'NAMOBJ': 'TextEdit', 'REMARK': 'TextEdit', 'KDPBPS': 'TextEdit', 'FCODE': 'TextEdit', 'LUASWH': 'TextEdit', 'UUPP': 'TextEdit', 'SRS_ID': 'TextEdit', 'LCODE': 'TextEdit', 'METADATA': 'TextEdit', 'KDEBPS': 'TextEdit', 'KDEPUM': 'TextEdit', 'KDCBPS': 'TextEdit', 'KDCPUM': 'TextEdit', 'KDBBPS': 'TextEdit', 'KDBPUM': 'TextEdit', 'WADMKD': 'TextEdit', 'WIADKD': 'TextEdit', 'WADMKC': 'TextEdit', 'WIADKC': 'TextEdit', 'WADMKK': 'TextEdit', 'WIADKK': 'TextEdit', 'WADMPR': 'TextEdit', 'WIADPR': 'TextEdit', 'TIPADM': 'TextEdit', 'SHAPE_Leng': 'TextEdit', 'SHAPE_Area': 'TextEdit', });
lyr_Serang_7.set('fieldImages', {'fid': 'TextEdit', 'KDPPUM': 'TextEdit', 'NAMOBJ': 'TextEdit', 'REMARK': 'TextEdit', 'KDPBPS': 'TextEdit', 'FCODE': 'TextEdit', 'LUASWH': 'TextEdit', 'UUPP': 'TextEdit', 'SRS_ID': 'TextEdit', 'LCODE': 'TextEdit', 'METADATA': 'TextEdit', 'KDEBPS': 'TextEdit', 'KDEPUM': 'TextEdit', 'KDCBPS': 'TextEdit', 'KDCPUM': 'TextEdit', 'KDBBPS': 'TextEdit', 'KDBPUM': 'TextEdit', 'WADMKD': 'TextEdit', 'WIADKD': 'TextEdit', 'WADMKC': 'TextEdit', 'WIADKC': 'TextEdit', 'WADMKK': 'TextEdit', 'WIADKK': 'TextEdit', 'WADMPR': 'TextEdit', 'WIADPR': 'TextEdit', 'TIPADM': 'TextEdit', 'SHAPE_Leng': 'TextEdit', 'SHAPE_Area': 'TextEdit', });
lyr_Tangerang_8.set('fieldImages', {'fid': 'TextEdit', 'KDPPUM': 'TextEdit', 'NAMOBJ': 'TextEdit', 'REMARK': 'TextEdit', 'KDPBPS': 'TextEdit', 'FCODE': 'TextEdit', 'LUASWH': 'TextEdit', 'UUPP': 'TextEdit', 'SRS_ID': 'TextEdit', 'LCODE': 'TextEdit', 'METADATA': 'TextEdit', 'KDEBPS': 'TextEdit', 'KDEPUM': 'TextEdit', 'KDCBPS': 'TextEdit', 'KDCPUM': 'TextEdit', 'KDBBPS': 'TextEdit', 'KDBPUM': 'TextEdit', 'WADMKD': 'TextEdit', 'WIADKD': 'TextEdit', 'WADMKC': 'TextEdit', 'WIADKC': 'TextEdit', 'WADMKK': 'TextEdit', 'WIADKK': 'TextEdit', 'WADMPR': 'TextEdit', 'WIADPR': 'TextEdit', 'TIPADM': 'TextEdit', 'SHAPE_Leng': 'TextEdit', 'SHAPE_Area': 'TextEdit', });
lyr_SawahKotaCilegon_9.set('fieldImages', {'gid': 'TextEdit', 'namobj': 'TextEdit', 'jnsswh': 'TextEdit', 'fcode': 'TextEdit', 'aqdate': 'DateTime', 'pudate': 'DateTime', 'remark': 'TextEdit', 'kodlco': 'TextEdit', 'srs_id': 'TextEdit', 'lcode': 'TextEdit', 'metadata': 'TextEdit', 'tnmswh': 'TextEdit', 'shape_leng': 'TextEdit', 'shape_area': 'TextEdit', });
lyr_SawahKotaSerang_10.set('fieldImages', {'gid': 'TextEdit', 'namobj': 'TextEdit', 'jnsswh': 'TextEdit', 'fcode': 'TextEdit', 'aqdate': 'DateTime', 'pudate': 'DateTime', 'remark': 'TextEdit', 'kodlco': 'TextEdit', 'srs_id': 'TextEdit', 'lcode': 'TextEdit', 'metadata': 'TextEdit', 'tnmswh': 'TextEdit', 'shape_leng': 'TextEdit', 'shape_area': 'TextEdit', });
lyr_SawahKotaTangerang_11.set('fieldImages', {'gid': 'TextEdit', 'namobj': 'TextEdit', 'jnsswh': 'TextEdit', 'fcode': 'TextEdit', 'aqdate': 'DateTime', 'pudate': 'DateTime', 'remark': 'TextEdit', 'kodlco': 'TextEdit', 'srs_id': 'TextEdit', 'lcode': 'TextEdit', 'metadata': 'TextEdit', 'tnmswh': 'TextEdit', 'shape_leng': 'TextEdit', 'shape_area': 'TextEdit', });
lyr_SawahKotaTangerangSelatan_12.set('fieldImages', {'gid': 'TextEdit', 'namobj': 'TextEdit', 'jnsswh': 'TextEdit', 'fcode': 'TextEdit', 'aqdate': 'DateTime', 'pudate': 'DateTime', 'remark': 'TextEdit', 'kodlco': 'TextEdit', 'srs_id': 'TextEdit', 'lcode': 'TextEdit', 'metadata': 'TextEdit', 'tnmswh': 'TextEdit', 'shape_leng': 'TextEdit', 'shape_area': 'TextEdit', });
lyr_SawahLebak_13.set('fieldImages', {'gid': 'TextEdit', 'namobj': 'TextEdit', 'jnsswh': 'TextEdit', 'fcode': 'TextEdit', 'aqdate': 'DateTime', 'pudate': 'DateTime', 'remark': 'TextEdit', 'kodlco': 'TextEdit', 'srs_id': 'TextEdit', 'lcode': 'TextEdit', 'metadata': 'TextEdit', 'tnmswh': 'TextEdit', 'shape_leng': 'TextEdit', 'shape_area': 'TextEdit', });
lyr_SawahPandeglang_14.set('fieldImages', {'gid': 'TextEdit', 'namobj': 'TextEdit', 'jnsswh': 'TextEdit', 'fcode': 'TextEdit', 'aqdate': 'DateTime', 'pudate': 'DateTime', 'remark': 'TextEdit', 'kodlco': 'TextEdit', 'srs_id': 'TextEdit', 'lcode': 'TextEdit', 'metadata': 'TextEdit', 'tnmswh': 'TextEdit', 'shape_leng': 'TextEdit', 'shape_area': 'TextEdit', });
lyr_SawahSerang_15.set('fieldImages', {'gid': 'TextEdit', 'namobj': 'TextEdit', 'jnsswh': 'TextEdit', 'fcode': 'TextEdit', 'aqdate': 'DateTime', 'pudate': 'DateTime', 'remark': 'TextEdit', 'kodlco': 'TextEdit', 'srs_id': 'TextEdit', 'lcode': 'TextEdit', 'metadata': 'TextEdit', 'tnmswh': 'TextEdit', 'shape_leng': 'TextEdit', 'shape_area': 'TextEdit', });
lyr_SawahTangerang_16.set('fieldImages', {'gid': 'TextEdit', 'namobj': 'TextEdit', 'jnsswh': 'TextEdit', 'fcode': 'TextEdit', 'aqdate': 'DateTime', 'pudate': 'DateTime', 'remark': 'TextEdit', 'kodlco': 'TextEdit', 'srs_id': 'TextEdit', 'lcode': 'TextEdit', 'metadata': 'TextEdit', 'tnmswh': 'TextEdit', 'shape_leng': 'TextEdit', 'shape_area': 'TextEdit', 'sum area': 'Range', 'Area Km2': 'Range', });
lyr_KotaCilegon_1.set('fieldLabels', {'fid': 'no label', 'KDPPUM': 'no label', 'NAMOBJ': 'no label', 'REMARK': 'no label', 'KDPBPS': 'no label', 'FCODE': 'no label', 'LUASWH': 'no label', 'UUPP': 'no label', 'SRS_ID': 'no label', 'LCODE': 'no label', 'METADATA': 'no label', 'KDEBPS': 'no label', 'KDEPUM': 'no label', 'KDCBPS': 'no label', 'KDCPUM': 'no label', 'KDBBPS': 'no label', 'KDBPUM': 'no label', 'WADMKD': 'no label', 'WIADKD': 'no label', 'WADMKC': 'no label', 'WIADKC': 'no label', 'WADMKK': 'no label', 'WIADKK': 'no label', 'WADMPR': 'no label', 'WIADPR': 'no label', 'TIPADM': 'no label', 'SHAPE_Leng': 'no label', 'SHAPE_Area': 'no label', });
lyr_KotaSerang_2.set('fieldLabels', {'fid': 'no label', 'KDPPUM': 'no label', 'NAMOBJ': 'no label', 'REMARK': 'no label', 'KDPBPS': 'no label', 'FCODE': 'no label', 'LUASWH': 'no label', 'UUPP': 'no label', 'SRS_ID': 'no label', 'LCODE': 'no label', 'METADATA': 'no label', 'KDEBPS': 'no label', 'KDEPUM': 'no label', 'KDCBPS': 'no label', 'KDCPUM': 'no label', 'KDBBPS': 'no label', 'KDBPUM': 'no label', 'WADMKD': 'no label', 'WIADKD': 'no label', 'WADMKC': 'no label', 'WIADKC': 'no label', 'WADMKK': 'no label', 'WIADKK': 'no label', 'WADMPR': 'no label', 'WIADPR': 'no label', 'TIPADM': 'no label', 'SHAPE_Leng': 'no label', 'SHAPE_Area': 'no label', });
lyr_KotaTangerang_3.set('fieldLabels', {'fid': 'no label', 'KDPPUM': 'no label', 'NAMOBJ': 'no label', 'REMARK': 'no label', 'KDPBPS': 'no label', 'FCODE': 'no label', 'LUASWH': 'no label', 'UUPP': 'no label', 'SRS_ID': 'no label', 'LCODE': 'no label', 'METADATA': 'no label', 'KDEBPS': 'no label', 'KDEPUM': 'no label', 'KDCBPS': 'no label', 'KDCPUM': 'no label', 'KDBBPS': 'no label', 'KDBPUM': 'no label', 'WADMKD': 'no label', 'WIADKD': 'no label', 'WADMKC': 'no label', 'WIADKC': 'no label', 'WADMKK': 'no label', 'WIADKK': 'no label', 'WADMPR': 'no label', 'WIADPR': 'no label', 'TIPADM': 'no label', 'SHAPE_Leng': 'no label', 'SHAPE_Area': 'no label', });
lyr_KotaTangerangSelatan_4.set('fieldLabels', {'fid': 'no label', 'KDPPUM': 'no label', 'NAMOBJ': 'no label', 'REMARK': 'no label', 'KDPBPS': 'no label', 'FCODE': 'no label', 'LUASWH': 'no label', 'UUPP': 'no label', 'SRS_ID': 'no label', 'LCODE': 'no label', 'METADATA': 'no label', 'KDEBPS': 'no label', 'KDEPUM': 'no label', 'KDCBPS': 'no label', 'KDCPUM': 'no label', 'KDBBPS': 'no label', 'KDBPUM': 'no label', 'WADMKD': 'no label', 'WIADKD': 'no label', 'WADMKC': 'no label', 'WIADKC': 'no label', 'WADMKK': 'no label', 'WIADKK': 'no label', 'WADMPR': 'no label', 'WIADPR': 'no label', 'TIPADM': 'no label', 'SHAPE_Leng': 'no label', 'SHAPE_Area': 'no label', });
lyr_Lebak_5.set('fieldLabels', {'fid': 'no label', 'KDPPUM': 'no label', 'NAMOBJ': 'no label', 'REMARK': 'no label', 'KDPBPS': 'no label', 'FCODE': 'no label', 'LUASWH': 'no label', 'UUPP': 'no label', 'SRS_ID': 'no label', 'LCODE': 'no label', 'METADATA': 'no label', 'KDEBPS': 'no label', 'KDEPUM': 'no label', 'KDCBPS': 'no label', 'KDCPUM': 'no label', 'KDBBPS': 'no label', 'KDBPUM': 'no label', 'WADMKD': 'no label', 'WIADKD': 'no label', 'WADMKC': 'no label', 'WIADKC': 'no label', 'WADMKK': 'no label', 'WIADKK': 'no label', 'WADMPR': 'no label', 'WIADPR': 'no label', 'TIPADM': 'no label', 'SHAPE_Leng': 'no label', 'SHAPE_Area': 'no label', });
lyr_Pandeglang_6.set('fieldLabels', {'fid': 'no label', 'KDPPUM': 'no label', 'NAMOBJ': 'no label', 'REMARK': 'no label', 'KDPBPS': 'no label', 'FCODE': 'no label', 'LUASWH': 'no label', 'UUPP': 'no label', 'SRS_ID': 'no label', 'LCODE': 'no label', 'METADATA': 'no label', 'KDEBPS': 'no label', 'KDEPUM': 'no label', 'KDCBPS': 'no label', 'KDCPUM': 'no label', 'KDBBPS': 'no label', 'KDBPUM': 'no label', 'WADMKD': 'no label', 'WIADKD': 'no label', 'WADMKC': 'no label', 'WIADKC': 'no label', 'WADMKK': 'no label', 'WIADKK': 'no label', 'WADMPR': 'no label', 'WIADPR': 'no label', 'TIPADM': 'no label', 'SHAPE_Leng': 'no label', 'SHAPE_Area': 'no label', });
lyr_Serang_7.set('fieldLabels', {'fid': 'no label', 'KDPPUM': 'no label', 'NAMOBJ': 'no label', 'REMARK': 'no label', 'KDPBPS': 'no label', 'FCODE': 'no label', 'LUASWH': 'no label', 'UUPP': 'no label', 'SRS_ID': 'no label', 'LCODE': 'no label', 'METADATA': 'no label', 'KDEBPS': 'no label', 'KDEPUM': 'no label', 'KDCBPS': 'no label', 'KDCPUM': 'no label', 'KDBBPS': 'no label', 'KDBPUM': 'no label', 'WADMKD': 'no label', 'WIADKD': 'no label', 'WADMKC': 'no label', 'WIADKC': 'no label', 'WADMKK': 'no label', 'WIADKK': 'no label', 'WADMPR': 'no label', 'WIADPR': 'no label', 'TIPADM': 'no label', 'SHAPE_Leng': 'no label', 'SHAPE_Area': 'no label', });
lyr_Tangerang_8.set('fieldLabels', {'fid': 'no label', 'KDPPUM': 'no label', 'NAMOBJ': 'no label', 'REMARK': 'no label', 'KDPBPS': 'no label', 'FCODE': 'no label', 'LUASWH': 'no label', 'UUPP': 'no label', 'SRS_ID': 'no label', 'LCODE': 'no label', 'METADATA': 'no label', 'KDEBPS': 'no label', 'KDEPUM': 'no label', 'KDCBPS': 'no label', 'KDCPUM': 'no label', 'KDBBPS': 'no label', 'KDBPUM': 'no label', 'WADMKD': 'no label', 'WIADKD': 'no label', 'WADMKC': 'no label', 'WIADKC': 'no label', 'WADMKK': 'no label', 'WIADKK': 'no label', 'WADMPR': 'no label', 'WIADPR': 'no label', 'TIPADM': 'no label', 'SHAPE_Leng': 'no label', 'SHAPE_Area': 'no label', });
lyr_SawahKotaCilegon_9.set('fieldLabels', {'gid': 'no label', 'namobj': 'no label', 'jnsswh': 'no label', 'fcode': 'no label', 'aqdate': 'no label', 'pudate': 'no label', 'remark': 'no label', 'kodlco': 'no label', 'srs_id': 'no label', 'lcode': 'no label', 'metadata': 'no label', 'tnmswh': 'no label', 'shape_leng': 'no label', 'shape_area': 'no label', });
lyr_SawahKotaSerang_10.set('fieldLabels', {'gid': 'no label', 'namobj': 'no label', 'jnsswh': 'no label', 'fcode': 'no label', 'aqdate': 'no label', 'pudate': 'no label', 'remark': 'no label', 'kodlco': 'no label', 'srs_id': 'no label', 'lcode': 'no label', 'metadata': 'no label', 'tnmswh': 'no label', 'shape_leng': 'no label', 'shape_area': 'no label', });
lyr_SawahKotaTangerang_11.set('fieldLabels', {'gid': 'no label', 'namobj': 'no label', 'jnsswh': 'no label', 'fcode': 'no label', 'aqdate': 'no label', 'pudate': 'no label', 'remark': 'no label', 'kodlco': 'no label', 'srs_id': 'no label', 'lcode': 'no label', 'metadata': 'no label', 'tnmswh': 'no label', 'shape_leng': 'no label', 'shape_area': 'no label', });
lyr_SawahKotaTangerangSelatan_12.set('fieldLabels', {'gid': 'no label', 'namobj': 'no label', 'jnsswh': 'no label', 'fcode': 'no label', 'aqdate': 'no label', 'pudate': 'no label', 'remark': 'no label', 'kodlco': 'no label', 'srs_id': 'no label', 'lcode': 'no label', 'metadata': 'no label', 'tnmswh': 'no label', 'shape_leng': 'no label', 'shape_area': 'no label', });
lyr_SawahLebak_13.set('fieldLabels', {'gid': 'no label', 'namobj': 'no label', 'jnsswh': 'no label', 'fcode': 'no label', 'aqdate': 'no label', 'pudate': 'no label', 'remark': 'no label', 'kodlco': 'no label', 'srs_id': 'no label', 'lcode': 'no label', 'metadata': 'no label', 'tnmswh': 'no label', 'shape_leng': 'no label', 'shape_area': 'no label', });
lyr_SawahPandeglang_14.set('fieldLabels', {'gid': 'no label', 'namobj': 'no label', 'jnsswh': 'no label', 'fcode': 'no label', 'aqdate': 'no label', 'pudate': 'no label', 'remark': 'no label', 'kodlco': 'no label', 'srs_id': 'no label', 'lcode': 'no label', 'metadata': 'no label', 'tnmswh': 'no label', 'shape_leng': 'no label', 'shape_area': 'no label', });
lyr_SawahSerang_15.set('fieldLabels', {'gid': 'no label', 'namobj': 'no label', 'jnsswh': 'no label', 'fcode': 'no label', 'aqdate': 'no label', 'pudate': 'no label', 'remark': 'no label', 'kodlco': 'no label', 'srs_id': 'no label', 'lcode': 'hidden field', 'metadata': 'no label', 'tnmswh': 'no label', 'shape_leng': 'no label', 'shape_area': 'no label', });
lyr_SawahTangerang_16.set('fieldLabels', {'gid': 'no label', 'namobj': 'no label', 'jnsswh': 'no label', 'fcode': 'no label', 'aqdate': 'no label', 'pudate': 'no label', 'remark': 'no label', 'kodlco': 'no label', 'srs_id': 'no label', 'lcode': 'no label', 'metadata': 'no label', 'tnmswh': 'no label', 'shape_leng': 'no label', 'shape_area': 'no label', 'sum area': 'no label', 'Area Km2': 'no label', });
lyr_SawahTangerang_16.on('precompose', function(evt) {
    evt.context.globalCompositeOperation = 'normal';
});