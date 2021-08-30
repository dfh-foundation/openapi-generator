/*
 * OpenAPI Petstore
 *
 * This is a sample server Petstore server. For this sample, you can use the api key `special-key` to test the authorization filters.
 *
 * API version: 1.0.0
 * Generated by: OpenAPI Generator (https://openapi-generator.tech)
 */

package petstoreserver

// SpecialInfo - An order info for a pets from the pet store
type SpecialInfo struct {

	Promotion bool `json:"promotion,omitempty"`

	Type string `json:"type,omitempty"`
}

// AssertSpecialInfoRequired checks if the required fields are not zero-ed
func AssertSpecialInfoRequired(obj SpecialInfo) error {
	return nil
}

// AssertRecurseSpecialInfoRequired recursively checks if required fields are not zero-ed in a nested slice.
// Accepts only nested slice of SpecialInfo (e.g. [][]SpecialInfo), otherwise ErrTypeAssertionError is thrown.
func AssertRecurseSpecialInfoRequired(objSlice interface{}) error {
	return AssertRecurseInterfaceRequired(objSlice, func(obj interface{}) error {
		aSpecialInfo, ok := obj.(SpecialInfo)
		if !ok {
			return ErrTypeAssertionError
		}
		return AssertSpecialInfoRequired(aSpecialInfo)
	})
}
