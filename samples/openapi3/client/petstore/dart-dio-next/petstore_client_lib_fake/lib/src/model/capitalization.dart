//
// AUTO-GENERATED FILE, DO NOT MODIFY!
//

import 'package:built_value/built_value.dart';
import 'package:built_value/serializer.dart';

part 'capitalization.g.dart';

/// Capitalization
///
/// Properties:
/// * [smallCamel] 
/// * [capitalCamel] 
/// * [smallSnake] 
/// * [capitalSnake] 
/// * [sCAETHFlowPoints] 
/// * [ATT_NAME] - Name of the pet 
abstract class Capitalization implements Built<Capitalization, CapitalizationBuilder> {
    @BuiltValueField(wireName: r'smallCamel')
    String? get smallCamel;

    @BuiltValueField(wireName: r'CapitalCamel')
    String? get capitalCamel;

    @BuiltValueField(wireName: r'small_Snake')
    String? get smallSnake;

    @BuiltValueField(wireName: r'Capital_Snake')
    String? get capitalSnake;

    @BuiltValueField(wireName: r'SCA_ETH_Flow_Points')
    String? get sCAETHFlowPoints;

    /// Name of the pet 
    @BuiltValueField(wireName: r'ATT_NAME')
    String? get ATT_NAME;

    Capitalization._();

    @BuiltValueHook(initializeBuilder: true)
    static void _defaults(CapitalizationBuilder b) => b;

    factory Capitalization([void updates(CapitalizationBuilder b)]) = _$Capitalization;

    @BuiltValueSerializer(custom: true)
    static Serializer<Capitalization> get serializer => _$CapitalizationSerializer();
}

class _$CapitalizationSerializer implements StructuredSerializer<Capitalization> {
    @override
    final Iterable<Type> types = const [Capitalization, _$Capitalization];

    @override
    final String wireName = r'Capitalization';

    @override
    Iterable<Object?> serialize(Serializers serializers, Capitalization object,
        {FullType specifiedType = FullType.unspecified}) {
        final result = <Object?>[];
        if (object.smallCamel != null) {
            result
                ..add(r'smallCamel')
                ..add(serializers.serialize(object.smallCamel,
                    specifiedType: const FullType(String)));
        }
        if (object.capitalCamel != null) {
            result
                ..add(r'CapitalCamel')
                ..add(serializers.serialize(object.capitalCamel,
                    specifiedType: const FullType(String)));
        }
        if (object.smallSnake != null) {
            result
                ..add(r'small_Snake')
                ..add(serializers.serialize(object.smallSnake,
                    specifiedType: const FullType(String)));
        }
        if (object.capitalSnake != null) {
            result
                ..add(r'Capital_Snake')
                ..add(serializers.serialize(object.capitalSnake,
                    specifiedType: const FullType(String)));
        }
        if (object.sCAETHFlowPoints != null) {
            result
                ..add(r'SCA_ETH_Flow_Points')
                ..add(serializers.serialize(object.sCAETHFlowPoints,
                    specifiedType: const FullType(String)));
        }
        if (object.ATT_NAME != null) {
            result
                ..add(r'ATT_NAME')
                ..add(serializers.serialize(object.ATT_NAME,
                    specifiedType: const FullType(String)));
        }
        return result;
    }

    @override
    Capitalization deserialize(Serializers serializers, Iterable<Object?> serialized,
        {FullType specifiedType = FullType.unspecified}) {
        final result = CapitalizationBuilder();

        final iterator = serialized.iterator;
        while (iterator.moveNext()) {
            final key = iterator.current as String;
            iterator.moveNext();
            final Object? value = iterator.current;
            switch (key) {
                case r'smallCamel':
                    result.smallCamel = serializers.deserialize(value,
                        specifiedType: const FullType(String)) as String;
                    break;
                case r'CapitalCamel':
                    result.capitalCamel = serializers.deserialize(value,
                        specifiedType: const FullType(String)) as String;
                    break;
                case r'small_Snake':
                    result.smallSnake = serializers.deserialize(value,
                        specifiedType: const FullType(String)) as String;
                    break;
                case r'Capital_Snake':
                    result.capitalSnake = serializers.deserialize(value,
                        specifiedType: const FullType(String)) as String;
                    break;
                case r'SCA_ETH_Flow_Points':
                    result.sCAETHFlowPoints = serializers.deserialize(value,
                        specifiedType: const FullType(String)) as String;
                    break;
                case r'ATT_NAME':
                    result.ATT_NAME = serializers.deserialize(value,
                        specifiedType: const FullType(String)) as String;
                    break;
            }
        }
        return result.build();
    }
}

